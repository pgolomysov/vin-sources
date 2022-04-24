<?php

namespace App\Services\PageProcessor;

interface PageProcessorInterface
{
    public function parseData(string $page): array;
}
