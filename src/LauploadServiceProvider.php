<?php

/*
 * This file is part of the guanguans/laupload.
 *
 * (c) 琯琯 <yzmguanguan@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace jiahm\laupload;

use Illuminate\Support\ServiceProvider;

class LauploadServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laupload');

        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__.'/../config' => config_path()], 'laupload');
            $this->publishes([__DIR__.'/../resources/views' => resource_path('views/laupload')]);
            $this->publishes([__DIR__.'/../../../npm-asset' => public_path('node_modules')]);
        }
    }
}
