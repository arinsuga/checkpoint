<?php

namespace Arins\Providers;

use Illuminate\Support\ServiceProvider;

//Locater
use Arins\Services\Locater\Geocoding;

class OtherRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // ==> CONTOH:
        // $this->app->bind(
        //     'Arins\Bo\Repositories\User\UserRepositoryInterface',
        //     'Arins\Bo\Repositories\User\UserRepository'
        // );

        //Base Repository
        // $this->app->bind(
        //     'Arins\Repositories\BaseRepositoryInterface',
        //     function()
        //     {
        //         $model = new User();
        //         $modelRepository = new BaseRepository($model);
        //         return $modelRepository;
        //     }
        // );

        //Locater
        $this->app->bind(
            'Arins\Services\Locater\LocaterInterface',
            function()
            {
                $other = new Geocoding();
                $otherRepository = $other;
                return $otherRepository;
            }
        );

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
