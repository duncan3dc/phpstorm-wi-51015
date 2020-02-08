<?php

namespace Regatta\Stream\Models;

/**
 * @suite models
 */
interface FactoryInterface
{


    /**
     * @param string $class The class name of the data structure
     * @param int $id
     *
     * @return object An instance of $class
     */
    public function getById(string $class, int $id): object;
}
