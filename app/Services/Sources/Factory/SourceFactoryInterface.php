<?php

namespace App\Services\Sources\Factory;

use App\Services\Sources\SourceInterface;

interface SourceFactoryInterface
{
    public function createSourceInstance(string $sourceName): SourceInterface;
}
