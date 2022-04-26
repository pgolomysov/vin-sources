<?php

namespace App\Services\Sources\Factory;

use App\Services\Sources\Gibdd;
use App\Services\Sources\Nomerogram;
use App\Services\Sources\SourceInterface;
use Illuminate\Container\Container;
use Vin\SourcesLib\Enum\Sources;

class Source implements SourceFactoryInterface
{
    private array $sourcesMap = [
        Sources::Gibdd => Gibdd::class,
        Sources::Nomerogram => Nomerogram::class,
    ];

    private Container $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function createSourceInstance(string $sourceName): SourceInterface
    {
        $className = $this->sourcesMap[$sourceName];
        return $this->container->make($className);
    }
}
