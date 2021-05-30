<?php

namespace App\Modules\Blog\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class ModuleServiceProvider extends ServiceProvider
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
        $this->moduleWebRoutes();
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');
        $this->loadViewsFrom(__DIR__.'/../Views', 'blog');
    }

    public function moduleWebRoutes()
    {
        Route::group([
            'middleware' => 'web',
            'namespace' => 'App\Modules\Blog\Http\Controllers',
            'prefix'    => 'blog',
            'as'        => 'blog.'
        ], function () {
            require app_path('Modules/Blog/Http/routes.php');
        });
    }
}
