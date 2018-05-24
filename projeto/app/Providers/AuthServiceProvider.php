<?php

namespace App\Providers;

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
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('doPerfil', function ($user,$type) {
            if(!$user) return false;
        return $user->user_type == $type;
        });

        Gate::define('ehCidadao', function ($user) {
            if(!$user) return false;
        return $user->user_type != 1;
        });
    }
}
