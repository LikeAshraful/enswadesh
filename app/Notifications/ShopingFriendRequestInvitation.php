<?php

namespace App\Notifications;

use App\Models\InviteFriend;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ShopingFriendRequestInvitation extends Notification
{
    use Queueable;
    public $referral_link;

    public function __construct(InviteFriend $InviteFriend)
    {
        $this->referral_link = $InviteFriend;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Register link :'. $this->referral_link->referral_link)
                    ->line('Thank you for using our application!');
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
