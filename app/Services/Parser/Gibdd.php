<?php

namespace App\Services\Parser;

class Gibdd implements ParserInterface
{
    public function loadPage(string $url): string
    {
        return file_get_contents($url);
    }
}
