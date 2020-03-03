<?php

namespace Spatie\LaravelBlink;

use Illuminate\Support\ServiceProvider;
use Spatie\Blink\Blink;

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
