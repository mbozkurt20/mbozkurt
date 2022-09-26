<?php

use Illuminate\Support\ServiceProvider;

class QuoteProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/quote.php' => config_path('quote.php'),
        ], 'config');
    }
}
