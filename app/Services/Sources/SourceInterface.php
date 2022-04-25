<?php

namespace App\Services\Sources;

use App\Services\PageProcessor\PageProcessorInterface;
use App\Services\Parser\ParserInterface;
use Vin\SourcesLib\Dto\ReportComplete;
use Vin\SourcesLib\Dto\SourceTask;

interface SourceInterface
{
    public function __construct(PageProcessorInterface $pageProcessor, ParserInterface $parser);

    public function process(SourceTask $sourceDto): ReportComplete;
}
