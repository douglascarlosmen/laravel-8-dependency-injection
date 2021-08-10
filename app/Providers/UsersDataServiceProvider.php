<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class UsersDataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Contracts\ExternalApiDataInterface', function ($app) {
            return new \App\Services\UsersDataService($app->make('GuzzleHttp\Client'));
        });
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
