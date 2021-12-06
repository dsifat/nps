<?php

namespace App\Console;

use App\Events\TaskExecuted;
use App\Console\Commands\PrepareDev;
use App\Models\Backend\ScheduleTask;
use Illuminate\Support\Facades\Cache;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        PrepareDev::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
        $schedule_tasks = Cache::rememberForever('schedule-tasks.active', function () {
            return ScheduleTask::active()->get();
        });

        $schedule_tasks->each(function ($task) use ($schedule) {
            $taskItem = $schedule->command($task->command, $task->compileParameters(true));

            $taskItem->cron($task->expression)
                ->name($task->description)
                ->before(function () use ($task, $taskItem) {
                    $taskItem->start = microtime(true);
                    // Executing::dispatch($task);
                })
                ->after(function () use ($taskItem, $task) {
                    event(new TaskExecuted($task, $taskItem->start));
                    // TaskExecuted::dispatch($task, $taskItem->start);
                })
                ->sendOutputTo(storage_path($task->logPath()), true); //for logging

            if ($task->dont_overlap) {
                $taskItem->withoutOverlapping();
            }
            // if ($task->run_in_maintenance) {
            //     $taskItem->evenInMaintenanceMode();
            // }
            // if ($task->run_on_one_server && in_array(config('cache.default'), ['memcached', 'redis'])) {
            //     $taskItem->onOneServer();
            // }
        });
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
