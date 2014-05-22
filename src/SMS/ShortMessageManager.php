<?php namespace Katsana\SMS;

use Illuminate\Support\Manager;
use Katsana\SMS\Handler\SilverstreetHandler;

class ShortMessageManager extends Manager
{
    /**
     * Create Silverstreet driver.
     *
     * @return Provider
     */
    public function createSilverstreetDriver()
    {
        $config  = $this->app['config']->get('katsana/sms::connections.silverstreet', []);
        $handler = new SilverstreetHandler($config);

        return new Provider($handler);
    }

    /**
     * Get the default driver.
     *
     * @return string
     */
    public function getDefaultDriver()
    {
        return $this->app['config']->get('katsana/sms::driver', 'silverstreet');
    }

    /**
     * Set the default driver.
     *
     * @param  string   $name
     * @return void
     */
    public function setDefaultDriver($name)
    {
        $this->app['config']->set('katsana/sms::driver', $name);
    }
}
