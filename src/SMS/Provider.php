<?php namespace Katsana\SMS;

use BadMethodCallException;
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
     * Passthru to Handler instance.
     *
     * @param  string   $method
     * @param  array    $parameters
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        if (! method_exists($this->handler, $method)) {
            throw new BadMethodCallException("Method [{$method}] does not exist.");
        }

        return call_user_func_array([$this->handler, $method], $parameters);
    }
}
