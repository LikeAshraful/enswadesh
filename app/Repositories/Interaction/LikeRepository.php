<?php

namespace Repository\Interaction;

use Repository\BaseRepository;
use App\Models\Interaction\Like;

class LikeRepository extends BaseRepository
{
    public function model()
    {
       return Like::class;
    }

    public function getLikesByInteractionID($id)
    {
        return $this->model()::where('interaction_id', $id)->get();
    }
}
