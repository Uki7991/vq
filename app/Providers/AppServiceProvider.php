<?php

namespace App\Providers;

use App\Services\Antmedia\AntmediaService;
use GuzzleHttp\Client;
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
        $this->app->bind(AntmediaService::class, function () {
            return new AntmediaService(new Client([
                'base_uri' => config('antmedia.host', 'http://89.22.229.228').':'.config('antmedia.port', '5080'),
                'headers' => [
                    'Authorization' => config('antmedia.token'),
                    'Content-Type' => 'application/json',
                ]
            ]));
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
