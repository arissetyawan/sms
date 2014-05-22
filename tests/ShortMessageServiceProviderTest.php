<?php namespace Katsana\SMS\TestCase;

use Katsana\SMS\ShortMessageServiceProvider;
use Mockery as m;

class ShortMessageServiceProviderTest extends \PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
        m::close();
    }

    public function testIsNotDeferredService()
    {
        $stub = new ShortMessageServiceProvider(null);

        $this->assertFalse($stub->isDeferred());
    }
}
