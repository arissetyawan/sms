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

    function __construct(HandlerInterface $handler)
    {
        $this->handler = $handler;
    }

    public function send($to, $message)
    {
        return $this->handler->send($to, $message);
    }
}
