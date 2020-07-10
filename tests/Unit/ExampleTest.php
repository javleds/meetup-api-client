<?php

namespace Javleds\MeetupApiClient\Tests;

use Javleds\MeetupApiClient\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * @test
     */
    public function helloWorldShouldReturnAString() : void
    {
        $example = new Example();

        $this->assertSame(
            'Hello world!',
            $example->helloWorld()
        );
    }
}
