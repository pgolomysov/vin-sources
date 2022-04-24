<?php

namespace App\Services\Parser;

interface ParserInterface
{
    public function loadPage(string $url): string;
}
