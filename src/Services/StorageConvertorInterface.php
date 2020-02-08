<?php

namespace Regatta\Stream\Services;

interface StorageConvertorInterface
{


    /**
     * @param int $id
     *
     * @return void
     */
    public function store(int $id): void;
}
