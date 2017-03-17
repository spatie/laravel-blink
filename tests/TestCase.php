<?php

namespace Spatie\LaravelBlink\Test;

use Orchestra\Testbench\TestCase as Orchestra;
use Spatie\LaravelBlink\BlinkServiceProvider;

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
