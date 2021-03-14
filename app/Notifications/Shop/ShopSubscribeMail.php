<?php

namespace App\Notifications\Shop;

use Illuminate\Bus\Queueable;
use App\Models\SubscribeShpos;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ShopSubscribeMail extends Notification
{
    use Queueable;

    public $subscribeShop;

    public function __construct(SubscribeShpos $SubscribeShpos)
    {
        $this->subscribeShop = $SubscribeShpos;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->line('Hello '.$this->subscribeShop->subscriber->name)
                    ->line('Thank you for using our application!');
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}