<?php

use Spatie\LaravelBlink\Blink;

function blink()
{
    $arguments = func_get_args();

    $blink = app('blink');

    if (empty($arguments)) {
        return $blink;
    }

    if (count($arguments) === 1) {
        return $blink->get($arguments[0]);
    }

    if (count($arguments) === 2) {
        return $blink->put($arguments[0], $arguments[1]);
    }

    if (count($arguments)> 2) {
        throw new InvalidArgumentException("Too many arguments given");
    }

    return app(Blink::class);
}
