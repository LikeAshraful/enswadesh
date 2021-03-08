<?php

namespace App\Http\Controllers\API\ShopingFriend;

use Illuminate\Http\Request;
use App\Models\ShopingFriend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\JsonResponseTrait;
use Repository\ShopingFriend\ShopingFriendRepository;

class ShopingFriendController extends Controller
{
    use JsonResponseTrait;

    public $shopingFriendRepo;

    public function __construct(ShopingFriendRepository $shopingFriendRepository)
    {
        $this->shopingFriendRepo = $shopingFriendRepository;
    }

    public function store(Request $request)
    {
        $user = $this->shopingFriendRepo->create($request->except('user_id','token_from_user') + [
                'user_id'      =>  Auth::id()
            ]);
        return $this->json('Request sent',[
            'user_id'       =>  $user['user_id']
            ]);
    }
}
