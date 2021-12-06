<?php

namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Share all menuData to all the views
        // View::share('menuData', [$verticalMenuData, $horizontalMenuData]);

        View::composer(['panels.sidebar'], function ($view) {
            // get all data from menu.json file
            $verticalMenuJson = file_get_contents(base_path('resources/data/menu-data/verticalMenu.json'));
            $verticalMenuData = json_decode($verticalMenuJson);

            $view->with('menuData', [$verticalMenuData]);
        });
    }
}
