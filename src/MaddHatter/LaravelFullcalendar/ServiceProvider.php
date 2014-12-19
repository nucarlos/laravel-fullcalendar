<?php namespace MaddHatter\LaravelFullcalendar;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
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
        $this->app->bind('laravel-fullcalendar', function ($app) {
            return $app->make('MaddHatter\LaurelviewFullcalendar\Calendar');
        });
    }

    public function boot()
    {
        $this->package('madd-hatter/fullcalendar');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

}

