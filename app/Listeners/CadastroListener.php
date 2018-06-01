<?php

namespace App\Listeners;

use App\Events\Cadastro;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CadastroListener
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
     * @param  Cadastro  $event
     * @return void
     */
    public function handle(Cadastro $event)
    {
        //
    }
}
