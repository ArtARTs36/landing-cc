<?php

namespace App\Providers;

use App\Contracts\IntegrationClient;
use App\Integration\EmptyClient;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use Illuminate\Support\Facades\Schema;
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
        $this->app
            ->when(\App\Integration\Client::class)
            ->needs(ClientInterface::class)
            ->give(function () {
                return new Client([
                    'base_uri' => env('PANEL_INTEGRATION_HOST'),
                ]);
            });

        $this->app->singleton(IntegrationClient::class, function () {
            if (empty(env('PANEL_INTEGRATION_HOST'))) {
                return $this->app->make(EmptyClient::class);
            }

            return $this->app->make(\App\Integration\Client::class);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (env('DB_CONNECTION') === 'mysql') {
            Schema::defaultStringLength(191);
        }
    }
}
