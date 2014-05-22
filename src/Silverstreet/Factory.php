<?php namespace Katsana\Silverstreet;

use Illuminate\Container\Container;

class Factory
{
    /**
     * Application container.
     *
     * @var \Illuminate\Container\Container
     */
    protected $app;

    function __construct(Container $app)
    {
        $this->app = $app;
    }
}
