<?php

namespace App\Core\Providers;

use Illuminate\Support\ServiceProvider;
use \Illuminate\Database\Eloquent\Factories\Factory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Factory::class, function(){
            return Factory::construct(\Faker\Factory::create('pt_BR'), [
                'app/Modules/Blog/Databases/Factories'
            ]);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
