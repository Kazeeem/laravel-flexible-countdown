<?php

namespace Kazeeem\FlexibleCountdown;

use Illuminate\Support\ServiceProvider;

class FlexibleCountdownServiceProvider extends ServiceProvider
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
            __DIR__.'/public' => public_path('vendor/flexible-countdown'),
        ], 'public');
    }
}
