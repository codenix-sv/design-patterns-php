<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Creational\AbstractFactory;

/**
 * Interface ChairInterface
 * @package codenixsv\Patterns\Creational\AbstractFactory
 */
interface ChairInterface
{
    /**
     * @return string
     */
    public function getColor(): string;

    /**
     * @return bool
     */
    public function hasLegs(): bool;

    /**
     * @return string
     */
    public function getMaterial(): string;
}
