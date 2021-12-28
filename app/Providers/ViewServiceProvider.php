<?php

namespace App\Providers;

use App\Models\Backend\Topic;
use View;
use App\Models\Backend\Role;
use App\Models\Backend\Permission;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\Console\Command\Command;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['backend.roles.fields'], function ($view) {
            $permissions = Permission::orderBy('id', 'asc')->get();
            $permissions = $permissions->groupBy('group');

            $view->with('permissions', $permissions);
        });

        View::composer(['backend.users.fields'], function ($view) {
            $roleItems = Role::pluck('role_name', 'id')->toArray();
            $view->with('roleItems', $roleItems);
        });

        View::composer(['backend.topics.fields'], function ($view){
            $topics = Topic::whereNull('parent_id')->get()->pluck('name','id');
            $view->with('topics', $topics);
        });

        View::composer(['backend.topics.edit'], function ($view){
            $topics = Topic::whereNull('parent_id')->get()->pluck('name','id');
            $view->with('topics', $topics);
        });

        View::composer(['backend.schedule_tasks.fields'], function ($view) {
            $command_filter = config('schedule-task.artisan.command_filter');
            $whitelist = config('schedule-task.artisan.whitelist', true);

            $all_commands = collect(Artisan::all());

            if (! empty($command_filter)) {
                $all_commands = $all_commands->filter(function (Command $command) use ($command_filter, $whitelist) {
                    foreach ($command_filter as $filter) {
                        if (fnmatch($filter, $command->getName())) {
                            return $whitelist;
                        }
                    }

                    return ! $whitelist;
                });
            }

            $all_commands = $all_commands->sortBy(function (Command $command, $key) {
                return $command->getName();
            });

            $ret = [];
            $all_commands->each(function (Command $command) use (&$ret) {
                $ret[] = ['name' => $command->getName(), 'description' => $command->getDescription()];
            });

            $view->with('commands', $ret)->with('frequencies', config('schedule-task.frequencies'));
        });
    }
}
