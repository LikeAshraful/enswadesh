<?php

namespace App\Notifications;

use App\Models\ShopSubscribe;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ProductNotifyMail extends Notification
{
    use Queueable;
    public $subscribeShop;

    public function __construct($notificationData)
    {
        $this->subscribeShop = $notificationData;
    }

    public function via()
    {
        return ['mail','database'];
    }


    public function toMail()
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->line('Hello '.$this->subscribeShop['name'])
                    ->line('Your subscribe shop add new products')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    public function toDatabase()
    {
        return [
            'data'  => $this->subscribeShop
        ];
    }

    public function toArray($notifiable)
    {
        return [
        ];
    }
}
