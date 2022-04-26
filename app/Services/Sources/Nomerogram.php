<?php

namespace App\Services\Sources;

use App\Services\PageProcessor\PageProcessorInterface;
use App\Services\Parser\ParserInterface;
use Vin\SourcesLib\Dto\ReportComplete;
use Vin\SourcesLib\Dto\SourceTask;
use Vin\SourcesLib\Enum\Sources;

class Nomerogram implements SourceInterface
{
    private PageProcessorInterface $pageProcessor;
    private ParserInterface $parser;

    public function __construct(PageProcessorInterface $pageProcessor, ParserInterface $parser)
    {
       $this->pageProcessor = $pageProcessor;
       $this->parser = $parser;
    }

    public function process(SourceTask $sourceDto): ReportComplete
    {
        $url = sprintf('http://nomerogram.ru?vin=%s', $sourceDto->getVin());
        $page = $this->parser->loadPage($url);
        $result = $this->pageProcessor->parseData($page);

        //TODO: add transformer and status DTO
        return (new ReportComplete())
            ->setRequestId($sourceDto->getRequestId())
            ->setData($result)
            ->setStatus('complete_full')
            ->setSource(Sources::Nomerogram);
    }
}
