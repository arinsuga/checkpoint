<?php

namespace Arins\Providers;

use Illuminate\Support\ServiceProvider;

//Models built-in
use App\User;

//Model Arins\Fo
use Arins\Fo\Models\Attend;

//Repositories
use Arins\Repositories\BaseRepository;
use Arins\A0\Repositories\A0\A0Repository;
use Arins\Bo\Repositories\User\UserRepository;
use Arins\Bo\Repositories\UserAdmin\UserAdminRepository;
use Arins\Fo\Repositories\Attend\AttendRepository;

//Others
use Arins\Services\Locater\Locater;

class DataRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
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

        //A0 Repository
        $this->app->bind(
            'Arins\A0\Repositories\A0\A0RepositoryInterface',
            function()
            {
                $data = new User();
                $dataRepository = new A0Repository($data);
                return $dataRepository;
            }
        );

        //User Repository
        $this->app->bind(
            'Arins\Bo\Repositories\User\UserRepositoryInterface',
            function()
            {
                $data = new User();
                $dataRepository = new UserRepository($data);
                return $dataRepository;
            }
        );

        //User Admin Repository
        $this->app->bind(
            'Arins\Bo\Repositories\UserAdmin\UserAdminRepositoryInterface',
            function()
            {
                $data = new User();
                $dataRepository = new UserAdminRepository($data);
                return $dataRepository;
            }
        );

        //Attend Repository
        $this->app->bind(
            'Arins\Fo\Repositories\Attend\AttendRepositoryInterface',
            function()
            {
                $data = new Attend();
                $dataRepository = new AttendRepository($data);
                return $dataRepository;
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
