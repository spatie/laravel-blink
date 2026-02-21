<?php

namespace Spatie\LaravelBlink\Test;

use Blink;
use Spatie\LaravelBlink\BlinkFacade;
use PHPUnit\Framework\Attributes\Test;

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
