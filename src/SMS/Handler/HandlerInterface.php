<?php namespace Katsana\SMS\Handler;

interface HandlerInterface
{
    /**
     * Send SMS to a recipient.
     *
     * @param  string   $to
     * @param  string   $message
     * @return boolean
     */
    public function send($to, $message);
}
