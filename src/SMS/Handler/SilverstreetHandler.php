<?php namespace Katsana\SMS\Handler;

class SilverstreetHandler extends Handler implements HandlerInterface
{
    /**
     * Handler name.
     *
     * @var string
     */
    protected $name = 'silverstreet';

    /**
     * {@inheritdoc}
     */
    public function send($to, $message)
    {
        // TODO: Implement send() method.

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function delivery($response)
    {
        // TODO: Implement delivery() method.
    }
}
