<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Structural\Composite;

/**
 * Interface ContainerInterface
 * @package codenixsv\Patterns\Structural\Composite
 */
interface ContainerInterface
{
    /**
     * @return float
     */
    public function getLoadCapacity(): float ;
}
