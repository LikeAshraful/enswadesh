<?php

namespace App\Notifications\Shop;

use App\Models\ShopSubscribe;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ShopSubscribeMail extends Notification
{
    use Queueable;

    public $subscribeShop;

    public function __construct(ShopSubscribe $SubscribeShpos)
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
