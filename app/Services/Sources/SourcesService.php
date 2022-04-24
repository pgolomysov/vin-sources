<?php

namespace App\Services\Sources;

use Vin\SourcesLib\Dto\SourceTask;

class SourcesService
{
    private SourceFactoryInterface $sourceFactory;

    public function __construct(SourceFactoryInterface $factory)
    {
        $this->sourceFactory = $factory;
    }

    public function processJob(array $payload)
    {
        $dto = new SourceTask(100, 'gibdd', 'B738TO077', '1FABP21B4CK165368');

        $payload = [
            'payload' => $dto,
        ];

        $source = $this->sourceFactory->createSourceInstance($dto->getSource());
        $source->process($payload['payload']);
    }
}
