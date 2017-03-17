<?php

namespace Spatie\LaravelBlink;

use Spatie\Blink\Blink;
use Illuminate\Support\ServiceProvider;

class BlinkServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->singleton('blink', Blink::class);
    }
}
