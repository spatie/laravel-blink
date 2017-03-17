<?php

namespace Spatie\LaravelBlink;

use Illuminate\Support\ServiceProvider;

class BlinkServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/LaravelBlink.php' => config_path('LaravelBlink.php'),
            ], 'config');

            /*
            $this->loadViewsFrom(__DIR__.'/../resources/views', 'LaravelBlink');

            $this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/LaravelBlink'),
            ], 'views');
            */
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'LaravelBlink');
    }
}
