<?php

use Spatie\LaravelBlink\Blink;

function blink()
{
    $arguments = func_get_args();

    if (empty($arguments)) {
        return app('blink');
    }

    if (count($arguments) === 1) {
        return app('blink')->get($arguments[0]);
    }

    if (count($arguments) === 2) {
        return app('blink')->put($arguments[0], $arguments[1]);
    }

    throw new InvalidArgumentException('blink() expects 0, 1 or 2 arguments');
}
