<?php

namespace App\Mail;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TaskExecutedMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    public $task;
    public $log;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($task, $log)
    {
        $this->task = $task;
        $this->log = $log;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.task_notification_mail')
            ->subject($this->task->description . ' : Run at ' . Carbon::now()->toDayDateTimeString());
        ;
    }
}
