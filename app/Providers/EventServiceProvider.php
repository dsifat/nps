<?php

namespace App\Providers;

use App\Events\TaskExecuted;
use Illuminate\Auth\Events\Registered;
use App\Listeners\TaskExceutedMailerLogger;
use App\Listeners\SendUserCreatedNotification;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
            SendUserCreatedNotification::class,
        ],
        TaskExecuted::class => [
            TaskExceutedMailerLogger::class,
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
