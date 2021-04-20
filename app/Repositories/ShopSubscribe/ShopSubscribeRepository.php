<?php

namespace Repository\ShopSubscribe;

use App\Models\ShopSubscribe;
use Repository\BaseRepository;
use Illuminate\Support\Facades\Auth;

class ShopSubscribeRepository extends BaseRepository
{
    public function model()
    {
        return ShopSubscribe::class;
    }

    public function getSubscribes()
    {
        return $this->model()::with('subscribeShop')->where('user_id', auth()->user()->id)->get();
    }

    public function createSubscribe(array $modelData)
    {
        return $this->model()::create($modelData);
    }

    public function changeNickname($id, array $modelData)
    {
        $subscribe = $this->model()::where('user_id', Auth::id())->where('id', $id)->first();
        return $subscribe->update($modelData);
    }

    public function checkByShop($shopId)
    {
        return $this->model()::where('user_id', auth()->user()->id)->where('shop_id', $shopId)->first();
    }

    public function getCountSubscribersByShopID($shopId)
    {
        $shops = $this->model()::where('shop_id', $shopId)->get();
        return $shops->count();
    }

    public function getSubscribesInfo($shopId)
    {
        $subscribers = $this->model()::with('subscriber')->where('shop_id', $shopId)->get();
        return $subscribers;
    }

    public function deleteByID($id)
    {
        $subscribe = $this->model()::where('user_id', Auth::id())->where('id', $id)->first();
        $subscribe->delete();
    }
}