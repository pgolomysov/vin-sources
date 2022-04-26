<?php

namespace App\Services\PageProcessor;

class Nomerogram implements PageProcessorInterface
{
    public function parseData(string $page): array
    {
        //parsed data example
        return [
            'photo_numbers' => '3',
            'photos' => [
                'http://localhost/1.jpg',
                'http://localhost/2.jpg',
                'http://localhost/3.jpg',
            ],
        ];
    }
}
