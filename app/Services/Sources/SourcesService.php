<?php

namespace App\Services\Sources;

use App\Services\Sources\Factory\SourceFactoryInterface;
use Vin\SourcesLib\Dto\SourceTask;
use Vin\SourcesLib\Jobs\ReportCompleteJob;

class SourcesService
{
    private SourceFactoryInterface $sourceFactory;

    public function __construct(SourceFactoryInterface $factory)
    {
        $this->sourceFactory = $factory;
    }

    public function processJob(array $payload)
    {
        $source = $this->sourceFactory->createSourceInstance($payload['payload']->getSource());
        $reportCompleteDto = $source->process($payload['payload']);

        $payload = [
            'payload' => $reportCompleteDto,
        ];

        ReportCompleteJob::dispatch($payload)->onQueue('reports');
    }
}
