<?php

namespace Repository\ShopingFriend;

use App\Models\ShopingFriend;
use Repository\BaseRepository;

class ShopingFriendRepository extends BaseRepository
{
    public function model()
    {
        return ShopingFriend::class;
    }

    public function getFollowers()
    {
        return $this->model()::where('user_to',auth()->user()->id)->get();
    }

    public function getFollowing()
    {
        return $this->model()::where('user_id',auth()->user()->id)->get();
    }
}
