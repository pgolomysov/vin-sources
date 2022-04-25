<?php

namespace App\Services\Parser;

class Gibdd implements ParserInterface
{

    public function loadPage(string $url): string
    {
        //example of parser result
        return '
        <html>
        <head></head>
        <body>
            <h1>Result</h1>
            <div class="crash_count">1</div>
            <div class="car_insurance_till">25.09.2022</div>
        </body>
        </html>';
    }
}
