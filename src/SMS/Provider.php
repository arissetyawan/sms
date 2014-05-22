<?php namespace Katsana\SMS;

use Katsana\SMS\Handler\HandlerInterface;

class Provider
{
    /**
     * Handler instance.
     *
     * @var Handler\HandlerInterface
     */
    protected $handler;

    /**
     * Construct a new SMS Provider.
     *
     * @param Handler\HandlerInterface  $handler
     */
    function __construct(HandlerInterface $handler)
    {
        $this->handler = $handler;
    }

    /**
     * Send a SMS.
     *
     * @param  string   $to
     * @param  string   $message
     * @return Handler\HandlerInterface
     */
    public function send($to, $message)
    {
        return $this->handler->send($to, $message);
    }
}
