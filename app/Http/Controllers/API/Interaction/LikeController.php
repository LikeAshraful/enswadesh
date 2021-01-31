<?php

namespace App\Http\Controllers\API\Interaction;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Repository\Interaction\LikeRepository;
use App\Http\Controllers\JsonResponseTrait;
use App\Http\Resources\Interaction\LikeResource;

class LikeController extends Controller
{

    use JsonResponseTrait;

    public $likeRepo;

    public function __construct(LikeRepository $likeRepository)
    {
        $this->likeRepo = $likeRepository;
    }

    public function getLikes($interaction_id)
    {
        $likes = $this->likeRepo->getLikesByInteractionID($interaction_id);

        return $this->json(
            'Likes',
            LikeResource::collection($likes)
        );
    }

    public function store(Request $request)
    {
        $like = $this->likeRepo->create($request->except(['user_id']) + [
            'user_id' => Auth::id()
        ]);

        return $this->json(
            "Liked",
            $like
        );
    }

    public function destroy($id)
    {
        $like = $this->likeRepo->deletedByID($id);

        return $this->json(
            "disLiked",
            $like
        );
    }


}
