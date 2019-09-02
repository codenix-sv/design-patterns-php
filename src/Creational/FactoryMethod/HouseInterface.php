<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Creational\FactoryMethod;

/**
 * Interface HouseInterface
 * @package codenixsv\Patterns\Creational\FactoryMethod
 */
interface HouseInterface
{
    /**
     * @return int
     */
    public function getWidth(): int;

    /**
     * @return int
     */
    public function getHeight(): int;

    /**
     * @return string
     */
    public function getMaterial(): string;
}
