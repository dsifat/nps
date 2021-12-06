<?php

namespace App\Mail;

use Carbon\Carbon;
use App\Models\Backend\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserCreatedAdminMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.new_user_admin_mail')
            ->subject('A new user was created' . ' : at ' . Carbon::now()->toDayDateTimeString());
        ;
    }
}
