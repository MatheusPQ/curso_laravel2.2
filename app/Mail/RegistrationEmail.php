<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegistrationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }
    // public function __construct()
    // {
        
    // }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.registration')->subject('envio de email');

        // Desse método abaixo ñ precisaria da variavel $user nas linhar 14, 21 e 23 (poderia remover)
        // return $this->view('mails.registration')->subject('envio de email')->with(['name' => 'Joao']);
    }
}
