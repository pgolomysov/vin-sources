<?php

namespace App\Services\Sources;

use Vin\SourcesLib\Dto\SourceTask;

interface SourceInterface
{
    public function process(SourceTask $sourceDto);
}
