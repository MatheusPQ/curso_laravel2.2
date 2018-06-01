<?php

namespace App\Listeners;

use App\Mail\Registration;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegistrationListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        // dd($event->user);
        // var_dump('enviando o email');
        Mail::to('contato@devclass.com.br')->send(new Registration($event->user));
    }
}
