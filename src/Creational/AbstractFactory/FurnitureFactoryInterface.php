<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Creational\AbstractFactory;

/**
 * Interface FurnitureFactoryInterface
 * @package codenixsv\Patterns\Creational\AbstractFactory
 */
interface FurnitureFactoryInterface
{
    /**
     * @param string $color
     * @param bool $hasLegs
     * @return ChairInterface
     */
    public function makeChair(string $color, bool $hasLegs): ChairInterface;

    /**
     * @param int $width
     * @param int $height
     * @return TableInterface
     */
    public function makeTable(int $width, int $height): TableInterface;
}
