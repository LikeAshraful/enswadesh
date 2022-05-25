<?php

namespace Repository\Interaction;

use Repository\BaseRepository;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Models\Interaction\Comment;

class CommentRepository extends BaseRepository
{
    public function model()
    {
        return Comment::class;
    }

    public function storeFile(UploadedFile $file)
    {
        return Storage::put('uploads/interaction/comments', $file);
    }

    public function getCommentsByInteractionID($id)
    {
        return $this->model()::where('interaction_id', $id)->where('status', 1)->get();
    }

    public function deleteComment($id)
    {
        $comment = $this->findById($id);
        Storage::delete($comment->file);
        $comment->delete();
    }
}
