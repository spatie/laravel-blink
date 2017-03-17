<?php

namespace Spatie\LaravelBlink;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Spatie\LaravelBlink\LaravelBlinkClass
 */
class BlinkFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'blink';
    }
}
