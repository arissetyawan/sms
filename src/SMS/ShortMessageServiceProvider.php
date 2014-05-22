<?php namespace Katsana\SMS;

use Illuminate\Support\ServiceProvider;

class ShortMessageServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bindShared('katsana.sms', function ($app) {
            return new ShortMessageManager($app);
        });
    }
}
