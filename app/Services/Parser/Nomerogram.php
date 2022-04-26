<?php

namespace App\Services\Parser;

class Nomerogram implements ParserInterface
{
    public function loadPage(string $url): string
    {
        //example of parser result
        return '
        <html>
        <head></head>
        <body>
            <h1>Result</h1>
            <div class="photo_count">3</div>
            <div class="photo">http://localhost/1.jpg</div>
            <div class="photo">http://localhost/2.jpg</div>
            <div class="photo">http://localhost/3.jpg</div>
        </body>
        </html>';
    }
}
