<?php

namespace Andiwijaya\WebTime;

use Illuminate\Support\ServiceProvider;

class WebTimeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      include __DIR__ . '/routes/web.php';
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
      $this->loadViewsFrom(__DIR__ . '/views', 'web-time');

      $this->publishes([
        __DIR__ . '/views'=>base_path('resources/views/andiwijaya/web-time')
      ]);
    }
}
