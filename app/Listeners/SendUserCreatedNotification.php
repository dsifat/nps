<?php

namespace App\Listeners;

use App\Mail\UserCreatedAdminMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;

class SendUserCreatedNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        // Log::debug($event->user);
        // Log::alert("need to fire mail" . config('app.admin_mail'));
        Mail::to(config('app.admin_mail'))->send(new UserCreatedAdminMail($event->user));
    }
}
