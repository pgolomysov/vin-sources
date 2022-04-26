<?php

namespace App\Providers;

use App\Services\Sources\Factory\Source;
use App\Services\Sources\Factory\SourceFactoryInterface;
use App\Services\Sources\Gibdd;
use App\Services\Sources\Nomerogram;
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

        //Prepare Gibdd service
        $gibddParser = new \App\Services\Parser\Gibdd();
        $gibddPageProcessor = new \App\Services\PageProcessor\Gibdd();
        $gibddSource = new Gibdd($gibddPageProcessor, $gibddParser);
        $this->app->instance(Gibdd::class, $gibddSource);

        //Prepare Nomerogram service
        $nomerogramParser = new \App\Services\Parser\Nomerogram();
        $nomerogramPageProcessor = new \App\Services\PageProcessor\Nomerogram();
        $nomerogramSource = new Nomerogram($nomerogramPageProcessor, $nomerogramParser);
        $this->app->instance(Nomerogram::class, $nomerogramSource);
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
