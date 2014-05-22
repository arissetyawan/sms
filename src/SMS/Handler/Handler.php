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

    /**
     * Send SMS to a recipient.
     *
     * @param  string   $to
     * @param  string   $message
     * @return boolean
     */
    public abstract function send($to, $message);
}
