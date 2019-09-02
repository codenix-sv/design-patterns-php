<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Creational\FactoryMethod;

/**
 * Class BrickHouseFactory
 * @package codenixsv\Patterns\Creational\FactoryMethod
 */
class BrickHouseFactory
{
    /**
     * @param $width
     * @param $height
     * @return HouseInterface
     */
    public function makeHouse($width, $height): HouseInterface
    {
        return new BrickHouse($width, $height);
    }
}
