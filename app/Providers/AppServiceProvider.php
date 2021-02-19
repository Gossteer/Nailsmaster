<?php

namespace App\Providers;

use App\Services\LoggerServices;
use Illuminate\Support\ServiceProvider;
use Psr\Log\LoggerInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(LoggerInterface::class, function ($app) {
            return new LoggerServices();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Passport::hashClientSecrets();
    }
}
