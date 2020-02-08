<?php

namespace Regatta\Stream\Services;

use Regatta\Stream\Models\FactoryInterface;
use Regatta\Stream\Models\Integration;

final class StorageConvertor implements StorageConvertorInterface
{
    /** @var FactoryInterface */
    private $factory;


    /**
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }


    /** @inheritDoc */
    public function store(int $id): void
    {
        $integration = $this->factory->getById(Integration::class, $id);
        $integration->getId();
    }
}
