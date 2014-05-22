<?php namespace Katsana\SMS\TestCase;

use Katsana\SMS\ShortMessageManager;
use Mockery as m;

class ShortMessageManagerTest extends \PHPUnit_Framework_TestCase
{
    public function tearDown()
    {
        m::close();
    }

    public function testGetDefaultDriverMethod()
    {
        $app = [
            'config' => $config = m::mock('\Illuminate\Config\Repository'),
        ];

        $config->shouldReceive('get')->once()
            ->with('katsana/sms::driver', 'silverstreet')->andReturn('foobar');

        $stub = new ShortMessageManager($app);

        $this->assertEquals('foobar', $stub->getDefaultDriver());
    }

    public function testSetDefaultDriverMethod()
    {
        $app = [
            'config' => $config = m::mock('\Illuminate\Config\Repository'),
        ];

        $config->shouldReceive('set')->once()
            ->with('katsana/sms::driver', 'foobar')->andReturnNull();

        $stub = new ShortMessageManager($app);

        $this->assertNull($stub->setDefaultDriver('foobar'));
    }
}
