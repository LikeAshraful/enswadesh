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
        return $this->model()::where('user_id', auth()->user()->id)->get();
    }

    public function createSubscribe(array $modelData)
    {
    	//$checkSub = $this->model()::where('user_id', auth()->user()->id)->where('shop_id', $shopId)->first();
        return $this->model()::create($modelData);
    }

    public function checkByShop($shopId)
    {
        return $this->model()::where('user_id', auth()->user()->id)->where('shop_id', $shopId)->first();
    }

    public function getCountByShop($shopId)
    {
        $shops = $this->model()::where('shop_id', $shopId)->get();
        return $shops->count();
    }
}