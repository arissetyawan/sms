<?php namespace Katsana\SMS\Handler;

class SilverstreetHandler extends Handler implements HandlerInterface
{
    protected $name = 'silverstreet';

    /**
     * Send SMS to a recipient.
     *
     * @param  string $to
     * @param  string $message
     * @return boolean
     */
    public function send($to, $message)
    {
        // TODO: Implement send() method.
    }
}
