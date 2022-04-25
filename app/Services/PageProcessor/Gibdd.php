<?php

namespace App\Services\PageProcessor;

class Gibdd implements PageProcessorInterface
{
    public function parseData(string $page): array
    {
        //parsed data example
        return [
            'crash_count' => '2',
            'car_insurance_till' => '25.09.2022',
        ];
    }
}
