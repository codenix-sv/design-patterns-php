<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Creational\FactoryMethod;

/**
 * Class StrawHouseFactory
 * @package codenixsv\Patterns\Creational\FactoryMethod
 */
class StrawHouseFactory
{
    /**
     * @param $width
     * @param $height
     * @return HouseInterface
     */
    public function makeHouse($width, $height): HouseInterface
    {
        return new StrawHouse($width, $height);
    }
}
