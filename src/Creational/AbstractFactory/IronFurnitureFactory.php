<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Creational\AbstractFactory;

/**
 * Class IronFurnitureFactory
 * @package codenixsv\Patterns\Creational\AbstractFactory
 */
class IronFurnitureFactory implements FurnitureFactoryInterface
{
    /**
     * @param string $color
     * @param bool $hasLegs
     * @return ChairInterface
     */
    public function makeChair(string $color, bool $hasLegs): ChairInterface
    {
        return new IronChair($color, $hasLegs);
    }

    /**
     * @param int $width
     * @param int $height
     * @return TableInterface
     */
    public function makeTable(int $width, int $height): TableInterface
    {
        return new IronTable($width, $height);
    }
}
