<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class RegistrationConfirmationEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address    = 'eftear.galib@gmail.com';
        $subject    = 'Congratulations and Welcome to Success Team and Our Family';
        $name       = 'Eftear Galib';

        return $this->view('emails.registration_confirmation_mail')
                    ->from($address, $name)
                    ->replyTo($address, $name)
                    ->subject($subject)
                    ->with([ 'registration_confirmation_mail' => isset($this->data['messagekk']) ? 
                                                                $this->data['messagekk'] : ''
                     ]);
    }
    
}
