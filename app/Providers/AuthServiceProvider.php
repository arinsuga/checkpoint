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

        /**
         * Authorization
         * Only work for user resource but not working for user role
         * example: user posts resource
         */

        //POST_ROLE
        Gate::define(env('POST_ROLE_CODE'), function($user) {

            $role = env('POST_ROLE_CODE');
            $roles = $user->roles;

            foreach ($roles as $item) {

                if ($role == $item->code) {
                    return true;
                } //end if

            } //end loop

            return false;
        }); //end gate

    } //end method
}
