<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Repository\User\UserRepository;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\JsonResponseTrait;

class NotificationController extends Controller
{
    use JsonResponseTrait;

    public $userRepo;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepo = $userRepository;
    }

    public function index()
    {
        $notifications = auth()->user()->unreadNotifications;

        return $this->json(
            'Notifications',
            $notifications
        );

    }

    public function productNotificationByID()
    {
        $user = auth()->user()->unreadNotifications->where('type','App\Notifications\ProductNotifyMail');
        return $this->json('Notifications',$user);
    }

    public function readNotification(Request $request)
    {
        auth()->user()
        ->unreadNotifications
        ->when($request->input('id'), function ($query) use ($request) {
            return $query->where('id', $request->input('id'));
        })
        ->markAsRead();

        return response()->noContent();
    }
}
