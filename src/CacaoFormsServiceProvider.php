<?php

namespace Kodazzi\CacaoForms;

use Illuminate\Support\ServiceProvider;

class CacaoFormsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'cacao');

        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/cacao'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
