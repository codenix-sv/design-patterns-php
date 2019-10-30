<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Structural\Composite;

/**
 * Class Freighter
 * @package codenixsv\Patterns\Structural\Composite
 */
class Freighter
{
    /**
     * @var ContainerInterface[]
     */
    private $containers = [];

    public function addContainer(ContainerInterface $container)
    {
        $this->containers[] = $container;
    }

    /**
     * @return float
     */
    public function getLoadCapacity()
    {
        $loadCapacity = 0.0;

        foreach ($this->containers as $container) {
            $loadCapacity += $container->getLoadCapacity();
        }

        return $loadCapacity;
    }
}
