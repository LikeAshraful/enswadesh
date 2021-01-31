<?php

namespace App\Http\Controllers\API\Interaction;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\JsonResponseTrait;
use Repository\Interaction\CommentRepository;
use Repository\Interaction\InteractionRepository;
use App\Http\Resources\Interaction\CommentResource;

class CommentController extends Controller
{
    use JsonResponseTrait;

    public $commentRepo;
    public $interactionRepo;
    public function __construct(CommentRepository $commentRepository, InteractionRepository $interactionRepository)
    {
        $this->commentRepo = $commentRepository;
        $this->interactionRepo = $interactionRepository;
    }

    public function index()
    {

    }

    public function show($id)
    {
        $comments = $this->commentRepo->getCommentsByInteractionID($id);

        return $this->json(
            'Comment List',
            CommentResource::collection($comments)
        );
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'comment' => 'required',
            'file' => 'nullable|file|mimes:pdf,doc,mp4,jpeg,jpg,png,gif,audio/mpeg,mpga,mp3,wav,aac|max:20000'
        ]);

        if ($validator->fails()) {
            $message = $validator->errors();
            return response()->json($message);
        }

        $file = $request->hasFile('file') ? $this->commentRepo->storeFile($request->file('file')) : null;

        DB::beginTransaction();
        try{
            $comment = $this->commentRepo->create($request->except(['file','user_id']) + [
                'file' => $file,
                'user_id' => Auth::id()
            ]);

            // save log
            $this->interactionRepo->storeLog($comment->interaction_id, 'Comment Created', 'created');
        DB::commit();
        } catch (\Exception $e) {
            return response()->json($e);
        }

        return $this->json(
            "Comment Posted Sucessfully",
            $comment
        );
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'comment' => 'required',
            'file' => 'nullable|file|mimes:pdf,doc,mp4,jpeg,jpg,png,gif,audio/mpeg,mpga,mp3,wav,aac|max:20000'
        ]);

        if ($validator->fails()) {
            $message = $validator->errors();
            return response()->json($message);
        }

        $comment = $this->commentRepo->findOrFailByID($id);

        $file = $request->hasFile('file') ? $this->commentRepo->storeFile($request->file('file')) : $comment->file;

        DB::beginTransaction();
        try{
            $this->commentRepo->updateByID($id, $request->except(['file','user_id']) + [
                'file' => $file,
                'user_id' => Auth::id()
            ]);
            // save log
            $this->interactionRepo->storeLog($comment->interaction_id, 'Comment Updated', 'updated');
        DB::commit();
        } catch (\Exception $e) {
            return response()->json($e);
        }

        return $this->json(
            "Comment Updated Sucessfully",
            $comment
        );
    }

    public function destroy($id)
    {
        $this->commentRepo->deleteComment($id);
        return $this->json(
            "Comment Deleted Sucessfully"
        );
    }
}
