<?php

namespace App\Services\Sources;

use App\Services\Parser\Gibdd;

class SourceFactory implements SourceFactoryInterface
{
    private $sourcesMap = [
        'gibdd' => Gibdd::class,
        'nomarogram' => Nomerogram::class,
    ];

    public function createSourceInstance(string $sourceName): SourceInterface
    {

    }
}
