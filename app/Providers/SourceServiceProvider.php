<?php

namespace App\Providers;

use App\Services\Sources\Factory\Source;
use App\Services\Sources\Factory\SourceFactoryInterface;
use App\Services\Sources\Gibdd;
use Illuminate\Support\ServiceProvider;

class SourceServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SourceFactoryInterface::class, function ($app) {
            return new Source($app);
        });

        $gibddParser = new \App\Services\Parser\Gibdd();
        $gibddPageProcessor = new \App\Services\PageProcessor\Gibdd();
        $gibddSource = new Gibdd($gibddPageProcessor, $gibddParser);
        $this->app->instance(Gibdd::class, $gibddSource);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
