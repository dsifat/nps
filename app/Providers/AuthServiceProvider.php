<?php

namespace App\Providers;

use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Passport::routes();
        // Passport::loadKeysFrom(__DIR__.'/../secrets/oauth');

        Gate::before(function ($user, $permission) {
            if ($user->isSuperAdmin()) {
                return true;
            }

            if (strpos($permission, '|') !== false) {
                $perms = explode('|', $permission);

                foreach ($perms as $perm) {
                    if ($user->permissions()->contains($perm) || Gate::allows($perm)) {
                        return true;
                    }
                }
            } elseif ($user->permissions()->contains($permission)) {
                return true;
            }
        });
    }
}
