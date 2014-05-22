<?php namespace Katsana\SMS;

use Illuminate\Support\ServiceProvider;

class ShortMessageServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

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
