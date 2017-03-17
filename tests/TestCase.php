<?php

namespace Spatie\LaravelBlink\Test;

use Spatie\LaravelBlink\BlinkServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            BlinkServiceProvider::class,
        ];
    }
}
