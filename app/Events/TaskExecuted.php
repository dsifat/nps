<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class TaskExecuted
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    public $task;
    public $startTime;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($task, $startTime)
    {
        $this->task = $task;
        $this->startTime = $startTime;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
