<?php namespace Katsana\SMS\Handler;

class SilverstreetHandler extends Handler implements HandlerInterface
{
    protected $name = 'silverstreet';

    /**
     * {@inheritdoc}
     */
    public function send($to, $message)
    {
        // TODO: Implement send() method.
    }

    /**
     * {@inheritdoc}
     */
    public function delivery($response)
    {
        // TODO: Implement delivery() method.
    }
}
