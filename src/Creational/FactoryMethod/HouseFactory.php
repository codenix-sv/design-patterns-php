<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Creational\FactoryMethod;

/**
 * Class HouseFactory
 * @package codenixsv\Patterns\Creational\FactoryMethod
 */
abstract class HouseFactory
{
    /**
     * @param $width
     * @param $height
     * @return HouseInterface
     */
    abstract public function makeHouse($width, $height): HouseInterface;
}
