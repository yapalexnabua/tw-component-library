<?php

namespace Alexyap\TwComponentLibrary;

use Illuminate\Support\ServiceProvider;

class TwComponentLibraryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__, 'tw-component-library');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/' => base_path('resources/views/vendor/themes/'.self::THEME.'/config'),
            __DIR__ . '/views/' => base_path('resources/views/vendor/tw-component-library/views'),
            __DIR__ . '/pagination/' => base_path('resources/views/vendor/pagination'),
        ], self::THEME.'-theme-views');
        
        $this->publishes([
            __DIR__ . '/assets/' => public_path('themes/'.self::THEME.'/assets'),
        ], self::THEME.'-theme-assets');
    }
}
