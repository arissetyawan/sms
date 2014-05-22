<?php namespace Katsana\SMS\TestCase;

use Katsana\SMS\Provider;
use Mockery as m;

class ProviderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Teardown the test environment.
     */
    public function tearDown()
    {
        m::close();
    }

    /**
     * Test Katsana\SMS\Provider::send() method.
     *
     * @test
     */
    public function testSendMethod()
    {
        $handler = m::mock('\Katsana\SMS\Handler\HandlerInterface');
        $stub = new Provider($handler);

        $handler->shouldReceive('send')->once()->with('0123456789', 'Hello world')->andReturnSelf();

        $this->assertEquals($handler, $stub->send('0123456789', 'Hello world'));
    }
}
