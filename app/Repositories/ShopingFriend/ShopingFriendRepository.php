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

    public function generateToken(): string
    {
        $token = openssl_random_pseudo_bytes(16);
        return $token = bin2hex($token);
    }
}
