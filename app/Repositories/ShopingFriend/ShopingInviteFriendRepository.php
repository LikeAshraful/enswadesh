<?php

namespace Repository\ShopingFriend;

use App\Models\InviteFriend;
use Repository\BaseRepository;

class ShopingInviteFriendRepository extends BaseRepository
{
    public function model()
    {
        return InviteFriend::class;
    }

    public function generateToken(): string
    {
        $token = openssl_random_pseudo_bytes(16);
        return $token = bin2hex($token);
    }

    public function getShopingFriendIDByToken($token)
    {
        return $this->model()::where('token', $token)->first();
    }


}
