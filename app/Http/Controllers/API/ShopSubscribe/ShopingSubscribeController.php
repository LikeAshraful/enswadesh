<?php

namespace App\Http\Controllers\API\ShopSubscribe;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\JsonResponseTrait;
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
        return $this->json('Request sent', $user);
    }

    public function checkByShop($shopId)
    {
        $check = $this->shopSubscribeRepo->checkByShop($shopId);

         return $this->json('Subscribe Check', $check);
    }

    public function countByShop($shopId)
    {
        $count = $this->shopSubscribeRepo->getCountByShop($shopId);

         return $this->json('Subscribe Count', $count);
    }
}
