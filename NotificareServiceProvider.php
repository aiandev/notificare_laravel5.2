<?php

namespace Aiandev\Notificarelaravel5;

use Illuminate\Support\ServiceProvider;
use Aiandev\Notificarelaravel5\notificare\NotificareApi; 

class NotificareServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
		$this->publishes([
            __DIR__ . '/config/config.php' => config_path('notificare.php'),
        ], 'notificare');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
		$this->mergeConfigFrom(
			   __DIR__ . '/config/config.php', 'notificare'
		);
//        include __DIR__.'/routes.php';
//        $this->app->make('Aiandev\Notificarelaravel5\NotificareController');
    }
}
