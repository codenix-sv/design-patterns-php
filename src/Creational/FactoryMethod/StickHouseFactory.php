<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Creational\FactoryMethod;

/**
 * Class StickHouseFactory
 * @package codenixsv\Patterns\Creational\FactoryMethod
 */
class StickHouseFactory
{
    /**
     * @param $width
     * @param $height
     * @return HouseInterface
     */
    public function makeHouse($width, $height): HouseInterface
    {
        return new StickHouse($width, $height);
    }
}
