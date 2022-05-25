<?php

namespace Repository\Interaction;

use Repository\BaseRepository;
use App\Models\Interaction\Share;

class ShareRepository extends BaseRepository
{
    public function model()
    {
       return Share::class;
    }

    public function getSharessByInteractionID($id)
    {
        return $this->model()::where('interaction_id', $id)->get();
    }
}
