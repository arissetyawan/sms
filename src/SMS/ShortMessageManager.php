<?php namespace Katsana\SMS;

use Illuminate\Support\Manager;
use Katsana\SMS\Handler\SilverstreetHandler;

class ShortMessageManager extends Manager
{
    public function createSilverstreetDriver()
    {
        $config  = $this->app['config']->get('katsana/sms::connections.silverstreet', []);
        $handler = new SilverstreetHandler($config);

        return new Provider($handler);
    }

    public function getDefaultDriver()
    {
        return $this->app['config']->get('katsana/sms::driver', 'silverstreet');
    }
}
