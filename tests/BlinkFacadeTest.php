<?php

namespace Spatie\LaravelBlink\Test;

use Blink;
use PHPUnit\Framework\Attributes\Test;
use Spatie\LaravelBlink\BlinkFacade;

class BlinkFacadeTest extends TestCase
{
    #[Test]
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
