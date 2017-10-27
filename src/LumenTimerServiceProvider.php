<?php

namespace Astatroth\LaravelTimer;

use Illuminate\Support\ServiceProvider;

class LumenTimerServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('timer', function ($app) {
            return new LaravelTimer();
        });
    }
}
