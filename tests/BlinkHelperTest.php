<?php

namespace Spatie\LaravelBlink\Test;

use InvalidArgumentException;
use Spatie\Blink\Blink;
use PHPUnit\Framework\Attributes\Test;

class BlinkHelperTest extends TestCase
{
    #[Test]
    public function it_returns_an_instance_of_blink()
    {
        $this->assertInstanceOf(Blink::class, blink());
    }

    #[Test]
    public function when_passing_a_single_argument_it_will_be_used_as_a_key()
    {
        blink()->put('key', 'myValue');

        $this->assertEquals('myValue', blink('key'));
    }

    #[Test]
    public function when_passing_two_arguments_they_will_be_used_to_put_something_in_the_blink_cache()
    {
        blink('key', function () {
            return 'myValue';
        });

        $this->assertEquals('myValue', blink()->get('key'));
    }

    #[Test]
    public function when_passing_two_arguments_the_result_of_the_callable_will_be_returned()
    {
        $result = blink('key', function () {
            return 'myValue';
        });

        $this->assertEquals('myValue', $result);
    }

    #[Test]
    public function it_will_throw_an_exception_if_too_many_arguments_are_given()
    {
        $this->expectException(InvalidArgumentException::class);

        blink('one', 'two', 'tree');
    }
}
