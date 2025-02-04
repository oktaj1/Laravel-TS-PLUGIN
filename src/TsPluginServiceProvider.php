<?php

namespace FF\TsPlugin;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\File;


class TsPluginServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'tsplugin');

        // Publish public assets (js, css, etc.)
        $this->publishes([
            __DIR__.'/../public' => base_path('public/vendor/tsplugin'),
        ], 'public');
        
    }

    public function register()
    {
        
    }
}


