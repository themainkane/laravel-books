<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
        Gate::define("admin", function ($user) {
            //decide if user is an administrator
            if ($user->role == 'admin') {
                return true;
            } else {
                return false;
            }
        });
        Gate::define("user", function ($user) {
            if ($user) {
                return true;
            } else {
                return false;
            }
        });
    }
}