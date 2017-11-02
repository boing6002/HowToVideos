<?php

namespace LaravelEnso\HowToVideos;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'laravel-enso/howToVideos');

        $this->publishes([
            __DIR__.'/storage/app' => storage_path('app'),
        ], 'howToVideos-storage');
    }

    public function register()
    {
        //
    }
}
