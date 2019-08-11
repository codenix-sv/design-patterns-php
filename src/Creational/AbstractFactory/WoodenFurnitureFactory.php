<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Creational\AbstractFactory;

/**
 * Class WoodenFurnitureFactory
 * @package codenixsv\Patterns\Creational\AbstractFactory
 */
class WoodenFurnitureFactory implements FurnitureFactoryInterface
{
    /**
     * @param string $color
     * @param bool $hasLegs
     * @return ChairInterface
     */
    public function makeChair(string $color, bool $hasLegs): ChairInterface
    {
        return new WoodenChair($color, $hasLegs);
    }

    /**
     * @param int $width
     * @param int $height
     * @return TableInterface
     */
    public function makeTable(int $width, int $height): TableInterface
    {
        return new WoodenTable($width, $height);
    }
}
