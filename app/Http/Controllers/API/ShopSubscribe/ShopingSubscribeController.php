<?php

namespace App\Http\Controllers\API\ShopSubscribe;

use App\Models\User;
use Illuminate\Http\Request;
use Repository\User\UserRepository;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Notifications\ProductNotifyMail;
use App\Http\Controllers\JsonResponseTrait;
use Illuminate\Support\Facades\Notification;
use App\Notifications\Shop\ShopSubscribeMail;
use Repository\ShopSubscribe\ShopSubscribeRepository;

class ShopingSubscribeController extends Controller
{
    use JsonResponseTrait;

    public $shopSubscribeRepo;
    public $userRepo;

    public function __construct(ShopSubscribeRepository $shopSubscribeRepository,UserRepository $userRepository)
    {
        $this->shopSubscribeRepo    =   $shopSubscribeRepository;
        $this->userRepo = $userRepository;
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

    public function renameNickname(Request $request)
    {
        $subscribenickname = $this->shopSubscribeRepo->changeNickname($request->id,$request->all());
        return $this->json('Updated subscribe nickname',$subscribenickname);
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

    public function notifySubscribers($shopId)
    {
        $subscribers = $this->shopSubscribeRepo->getSubscribesInfo($shopId);
        foreach($subscribers as $key => $subscriber)
        {

            $userSchema = $this->userRepo->model()::where('id', $subscriber->user_id)->first();
            $notificationData = [
                    'name' => $userSchema->name,
                    'email'=> $userSchema->email,
                ];
            Notification::send($userSchema, new ProductNotifyMail($notificationData));
        }

        return $this->json('Sent Notification', $subscribers);
    }

    public function unsubscribe($id)
    {
        $subscribe   = $this->shopSubscribeRepo->deleteByID($id);
        $message    ="Unsubscribe!";
        return $this->json($message, $subscribe);
    }

    public function searchSubscribe($key)
    {
        $subscribe   = $this->shopSubscribeRepo->searchSubscribe($key);
        $message    ="Search Subscribe list!";
        return $this->json($message, $subscribe);
    }
}