<?php

namespace Repository\ShopSubscribe;

use App\Models\SubscribeShpos;
use Repository\BaseRepository;

class ShopSubscribeRepository extends BaseRepository
{
    public function model()
    {
        return SubscribeShpos::class;
    }

    public function getSubscribes()
    {
        return $this->model()::where('user_id',auth()->user()->id)->get();
    }
}