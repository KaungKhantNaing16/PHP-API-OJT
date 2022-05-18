<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Dao Registration
        // $this->app->bind('App\Contracts\Dao\AuthDaoInterface', 'App\Dao\AuthDao');

        // Services Registration
        // $this->app->bind('App\Contracts\Services\AuthServicesInterface', 'App\Services\AuthServices');
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
