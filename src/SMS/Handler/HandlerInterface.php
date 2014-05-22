<?php namespace Katsana\SMS\Handler;

interface HandlerInterface
{
    /**
     * Send SMS to a recipient.
     *
     * @param  string   $to
     * @param  string   $message
     * @return HandlerInterface
     */
    public function send($to, $message);

    /**
     * Get delivery status.
     *
     * @param  string   $response
     * @return mixed
     */
    public function delivery($response);
}
