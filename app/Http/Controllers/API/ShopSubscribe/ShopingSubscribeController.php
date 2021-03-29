<?php

namespace App\Http\Controllers\API\ShopSubscribe;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\JsonResponseTrait;
use Illuminate\Support\Facades\Notification;
use App\Notifications\Shop\ShopSubscribeMail;
use Repository\ShopSubscribe\ShopSubscribeRepository;

class ShopingSubscribeController extends Controller
{
    use JsonResponseTrait;

    public $shopSubscribeRepo;

    public function __construct(ShopSubscribeRepository $shopSubscribeRepository)
    {
        $this->shopSubscribeRepo    =   $shopSubscribeRepository;
    }

    public function index()
    {
        $subscribe = $this->shopSubscribeRepo->getSubscribes();
        return $this->json('List of subscribe',[
            'subscribe' =>  $subscribe
        ]);
    }

    public function sentShopSubscribeRequest(Request $request)
    {
        $user = $this->shopSubscribeRepo->createSubscribe($request->all() + [
                'user_id'      =>  Auth::id()
            ]);

        Notification::route('mail', $user->subscriber->email,$user)->notify(new ShopSubscribeMail($user));

        return $this->json('Subscribe request sent', $user);
    }

    public function checkByShop($shopId)
    {
        $check = $this->shopSubscribeRepo->checkByShop($shopId);
         return $this->json('Subscribe Check', $check);
    }

    public function countSubscribersByShopID($shopId)
    {
        $count = $this->shopSubscribeRepo->getCountSubscribersByShopID($shopId);
         return $this->json('Subscribe Count', $count);
    }
}