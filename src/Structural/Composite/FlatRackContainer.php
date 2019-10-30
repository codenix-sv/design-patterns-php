<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Structural\Composite;

/**
 * Class FlatRackContainer
 * @package codenixsv\Patterns\Structural\Composite
 */
class FlatRackContainer implements ContainerInterface
{
    /**
     * @var float
     */
    private $loadCapacity;

    /**
     * FlatRackContainer constructor.
     * @param float $loadCapacity
     */
    public function __construct(float $loadCapacity)
    {
        $this->loadCapacity = $loadCapacity;
    }

    /**
     * @return float
     */
    public function getLoadCapacity(): float
    {
        return $this->loadCapacity;
    }
}
