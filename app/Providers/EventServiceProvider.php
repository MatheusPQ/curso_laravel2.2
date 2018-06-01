<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\Registration' => [
            'App\Listeners\RegistrationListener',
        ],
        // 'App\Events\Cadastro' => [
        //     'App\Listeners\CadastroListener',
        // ],
        'App\Events\UserCreated' => [
            'App\Listeners\UserCreatedListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
