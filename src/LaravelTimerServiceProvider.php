<?php

namespace Astatroth\LaravelTimer;

use Illuminate\Support\ServiceProvider;

class LaravelTimerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $laravel = app();
        $explodedVersion = explode('.', $laravel::VERSION);
        if ($explodedVersion[0] >= 5 && $explodedVersion[1] >= 4) {
            $this->app->singleton('timer', function ($app) {
                return new LaravelTimer();
            });
        } else {
            $this->app['timer'] = $this->app->share(function($app) {
                return new LaravelTimer();
            });
        }

        $this->app->alias('timer', 'Astatroth\LaravelTimer\LaravelTimer');
    }
}
