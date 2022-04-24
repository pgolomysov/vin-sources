<?php

namespace App\Services\PageProcessor;

class Gibdd implements PageProcessorInterface
{
    public function parseData(string $page): array
    {
        return [
            'attr1' => 'val1',
            'attr2' => 'val2',
        ];
    }
}
