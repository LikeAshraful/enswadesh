<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\JsonResponseTrait;

class NotificationController extends Controller
{
    use JsonResponseTrait;

    public function index()
    {
        $notifications = auth()->user()->unreadNotifications;

        return $this->json(
            'Notifications',
            $notifications
        );

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
