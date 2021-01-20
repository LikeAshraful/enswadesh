<?php

namespace App\Http\Controllers\API\General\Interaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\JsonResponseTrait;
use Repository\General\Interaction\InteractionRepository;
use App\Http\Resources\General\Interaction\InteractionResource;
use App\Models\General\Interaction\InteractionFile;

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
        $videos = $this->interactionRepo->getInteractionsByCategoryID(1);

        return $this->json(
            'Video List',
            InteractionResource::collection($videos)
        );
    }

    public function storeVideo(Request $request)
    {
        $image = $request->hasFile('thumbnail') ? $this->interactionRepo->storeFile($request->file('thumbnail'), 'video') : null;

        $videoFile = $request->hasFile('video') ? $this->interactionRepo->storeFile($request->file('video'), 'video') : null;

        $video = $this->interactionRepo->create($request->except(['thumbnail','user_id']) + [
            'thumbnail' => $image,
            'user_id' => Auth::id()
        ]);
        InteractionFile::create([
            'interaction_id' => $video->id,
            'file_path' => $videoFile,
            'file_type' => $request->file_type
        ]);

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

        $video = $this->interactionRepo->findInteractionByCategoryID(1, $id);

        if($video == null){
            return $this->bad('UnAuthorised Action', 403);
        }

        $image = $request->hasFile('thumbnail') ? $this->interactionRepo->storeFile($request->file('thumbnail'), 'video') : $video->thumbnail;
        if ($videoFile = $request->hasFile('video')){
            $this->interactionRepo->storeFile($request->file('video'), 'video');
        }

        $this->interactionRepo->updateByID($id, $request->except(['thumbnail','user_id']) + [
            'thumbnail' => $image,
            'user_id' => Auth::id()
        ]);

        InteractionFile::where('interaction_id', $id)->update([
            'file_path' => $videoFile,
            'file_type' => $request->file_type
        ]);

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
        $image = $request->hasFile('thumbnail') ? $this->interactionRepo->storeFile($request->file('thumbnail'), 'template') : null;

        $template = $this->interactionRepo->create($request->except(['thumbnail','user_id']) + [
            'thumbnail'          => $image,
            'user_id' => Auth::id()
        ]);

        return $this->json(
            "Tempalte Created Sucessfully",
            $template
        );
    }
}
