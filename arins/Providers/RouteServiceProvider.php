<?php

namespace Arins\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'Arins\Http\Controllers';
    protected $namespaceFo = 'Arins\Fo\Http\Controllers';
    protected $namespaceBo = 'Arins\Bo\Http\Controllers';
    protected $namespaceA0 = 'Arins\A0\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {

        $this->mapRoutes();
        $this->mapArinsRoutes();
        $this->mapDdRoutes();

    }


    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapRoutes()
    {

    }

    //Template only routes
    protected function mapArinsRoutes()
    {
        //Arins
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/main.php'));

        //Arins - BO ( Back Office / Admin )
        Route::middleware('web')
             ->namespace($this->namespaceBo)
             ->group(base_path('routes/bo.php'));

        //Arins - FO ( Front Office )
        Route::middleware('web')
             ->namespace($this->namespaceFo)
             ->group(base_path('routes/fo.php'));

        Route::middleware('web')
             ->namespace($this->namespaceA0)
             ->group(base_path('routes/a0.php'));
    }

    //Testing only routes
    protected function mapDdRoutes()
    {
        //BO
        Route::middleware('web')
             ->namespace($this->namespaceBo)
             ->group(base_path('routes/dd.php'));
    }

}
