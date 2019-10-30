<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Structural\Composite;

/**
 * Class DryContainer
 * @package codenixsv\Patterns\Structural\Composite
 */
class DryContainer implements ContainerInterface
{
    /**
     * @var float
     */
    private $loadCapacity;

    /**
     * DryContainer constructor.
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
