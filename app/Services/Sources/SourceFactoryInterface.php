<?php

namespace App\Services\Sources;

interface SourceFactoryInterface
{
    public function createSourceInstance(string $sourceName): SourceInterface;
}
