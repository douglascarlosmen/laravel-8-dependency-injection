<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HttpClientServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('GuzzleHttp\Client', function ($app) {
            return new \GuzzleHttp\Client([
                'base_uri' => $app->make('config')->get('app.url_api_externa')
            ]);
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
