<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //$this->app->bind('App\ImageGenerators\ImageGeneratorIntf', \App\ImageGenerators\StandardImageGenerator::class);
        $this->app->bind('App\ImageGenerators\ImageGeneratorIntf', \App\ImageGenerators\RandomMozaicGenerator::class);
        //$this->app->bind('App\ImageGenerators\ImageGeneratorIntf', \App\ImageGenerators\RandomBlurMozaicGenerator::class);
    }
}
