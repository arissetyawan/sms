<?php namespace Katsana\Silverstreet;

use Illuminate\Support\ServiceProvider;

class SilverstreetServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bindShared('katsana.silverstreet', function ($app) {
            return new Factory($app);
        });
    }
}
