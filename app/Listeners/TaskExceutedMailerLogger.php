<?php

namespace App\Listeners;

use App\Events\TaskExecuted;
use App\Mail\TaskExecutedMail;
use Illuminate\Support\Facades\Mail;

class TaskExceutedMailerLogger
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
     * @param  TaskExecuted  $event
     * @return void
     */
    public function handle(TaskExecuted $event)
    {
        $task = $event->task;

        $time_elapsed_secs = microtime(true) - $event->startTime;
        $time_elapsed_secs /= 1000;

        if (file_exists(storage_path($task->logPath()))) {
            $output = file_get_contents(storage_path($task->logPath()));

            $user_name = 'Scheduler';
            if (\Auth::user()) {
                $user_name = \Auth::user()->name;
            }

            $is_successfull = true;
            if (strpos($output, 'ERROR') !== false) {
                $is_successfull = false;
            }

            $task->logs()->create([
                'schedule_task_id' => $task->id,
                'executed_by' => $user_name,
                'time_taken' => $time_elapsed_secs * 1000,
                'log' => $output,
                'is_successfull' => $is_successfull,
            ]);

            unlink(storage_path($task->logPath()));

            // if((($is_successfull && $task->notification_type == 1) || $task->notification_type == 0) && $task->notification_email_address != '') {
            if (($task->notification_type == 1 || ($task->notification_type == 0 && ! $is_successfull)) && $task->notification_email_address != '') {
                $sentTos = explode(',', $task->notification_email_address);

                Mail::to($sentTos)->send(new TaskExecutedMail($task, $output));
            }

            $task->logCleanup();
        }
    }
}
