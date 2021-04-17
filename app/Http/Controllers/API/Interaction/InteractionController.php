<?php

namespace App\Http\Controllers\API\Interaction;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\JsonResponseTrait;
use App\Models\Interaction\InteractionFile;
use Repository\Interaction\InteractionRepository;
use App\Http\Resources\Interaction\InteractionResource;

class InteractionController extends Controller
{
    use JsonResponseTrait;

    public $interactionRepo;

    public function __construct(InteractionRepository $interactionRepository)
    {
        $this->interactionRepo = $interactionRepository;
    }

    public function videos()
    {
        $videos = $this->interactionRepo->getApprovedInteractionsByCategoryID(1);

        return $this->json(
            'Video List',
            InteractionResource::collection($videos)
        );
    }

    public function storeVideo(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'thumbnail' => 'required|mimes:jpeg,jpg,png|max:500',
            'status' => 'required|in:Pending,Approved,Declined'
        ]);

        if ($validator->fails()) {
            $message = $validator->errors();
            return response()->json($message);
        }

        $image = $request->hasFile('thumbnail') ? $this->interactionRepo->storeFile($request->file('thumbnail'), 'video') : null;
        $videoFile = $request->hasFile('video') ? $this->interactionRepo->storeFile($request->file('video'), 'video') : null;

        DB::beginTransaction();
        try {
            $video = $this->interactionRepo->create($request->except(['thumbnail','user_id']) + [
                'thumbnail' => $image,
                'user_id' => Auth::id()
            ]);
            //save video file
            InteractionFile::create([
                'interaction_id' => $video->id,
                'file_path' => $videoFile,
                'file_type' => $request->file_type
            ]);
            //save logs
            $this->interactionRepo->storeLog($video->id, 'Video Created', 'created');

            DB::commit();

        } catch (\Exception $e) {
            DB::rollback();
            return response()->json($e);
        }

        return $this->json(
            "Video Created Sucessfully",
            $video
        );
    }

    public function showVideo($id)
    {
        $video = $this->interactionRepo->showInteraction(1, $id);
        if($video == null){
            return $this->bad('UnAuthorised Action', 403);
        }
        return $this->json(
            "Video",
            new InteractionResource($video)
        );
    }

    public function updateVideo(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'thumbnail' => 'nullable|mimes:jpeg,jpg,png|max:500',
            'status' => 'required|in:Pending,Approved,Declined'
        ]);

        if ($validator->fails()) {
            $message = $validator->errors();
            return response()->json($message);
        }

        $video = $this->interactionRepo->findInteractionByCategoryID(1, $id);

        if($video == null){
            return $this->bad('UnAuthorised Action', 403);
        }

        $image = $request->hasFile('thumbnail') ? $this->interactionRepo->storeFile($request->file('thumbnail'), 'video') : $video->thumbnail;

        $videoFile = $request->hasFile('video') ?  $this->interactionRepo->storeFile($request->file('video'), 'video') : $video->file;

        DB::beginTransaction();
        try {
            $this->interactionRepo->updateByID($video->id, $request->except(['thumbnail','user_id']) + [
                'thumbnail' => $image,
                'user_id' => Auth::id()
            ]);
            if(InteractionFile::where('interaction_id', $id)->exists()) {
                InteractionFile::where('interaction_id', $id)->update([
                    'file_path' => $videoFile,
                    'file_type' => $request->file_type
                ]);
            } else {
                //save video file
                InteractionFile::create([
                    'interaction_id' => $video->id,
                    'file_path' => $videoFile,
                    'file_type' => $request->file_type
                ]);
            }

            //save logs
            $this->interactionRepo->storeLog($video->id, 'Video Updated', 'updated');

            DB::commit();

        } catch (\Exception $e) {
            return response()->json($e);
        }

        return $this->json(
            "Video Updated Sucessfully",
        );
    }


    public function templates()
    {
        $templates = $this->interactionRepo->getInteractionsByCategoryID(2);

        return $this->json(
            'Template List',
            InteractionResource::collection($templates)
        );
    }

    public function storeTemplate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'thumbnail' => 'required|mimes:jpeg,jpg,png|max:500',
            'status' => 'required|in:Pending,Approved,Declined'
        ]);

        if ($validator->fails()) {
            $message = $validator->errors();
            return response()->json($message);
        }

        $image = $request->hasFile('thumbnail') ? $this->interactionRepo->storeFile($request->file('thumbnail'), 'template') : null;

       DB::beginTransaction();
       try
       {
        $template = $this->interactionRepo->create($request->except(['thumbnail','user_id']) + [
            'thumbnail'          => $image,
            'user_id' => Auth::id()
        ]);

        //save logs
        $this->interactionRepo->storeLog($template->id, 'Template Created', 'created');

        Db::commit();

       } catch (\Exception $e) {
            DB::rollback();
            return response()->json($e);
       }

        return $this->json(
            "Tempalte Created Sucessfully",
            $template
        );
    }
}
