<?php

namespace Spatie\LaravelBlink\Test;

use Blink;
use Spatie\LaravelBlink\BlinkFacade;

class BlinkFacadeTest extends TestCase
{
    /** @test */
    public function it_provides_a_facade()
    {
        Blink::put('test', 'myValue');

        $this->assertEquals('myValue', Blink::get('test'));
    }

    protected function getPackageAliases($app)
    {
        return [
            'Blink' => BlinkFacade::class,
        ];
    }
}