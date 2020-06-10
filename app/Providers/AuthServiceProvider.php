<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider {
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
    public function boot() {
        $this->registerPolicies();

        // Gate qui détermine si l'user est propriétaire de l'animal
        Gate::define('userIsOwner', function ($user, $carnet) {
            return $user -> id == $carnet -> animals[0] -> users_id;
        });

        // TODO faire la même chose avec le vétérinaire
    }
}
