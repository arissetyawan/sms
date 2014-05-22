<?php namespace Katsana\SMS\Handler;

abstract class Handler
{
    /**
     * Handler name.
     *
     * @var string
     */
    protected $name;

    /**
     * Handler API version.
     *
     * @var string
     */
    protected $version;

    /**
     * Configuration.
     *
     * @var array
     */
    protected $config = [];

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }
}
