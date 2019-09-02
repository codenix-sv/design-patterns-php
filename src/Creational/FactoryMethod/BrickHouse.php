<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Creational\FactoryMethod;

/**
 * Class BrickHouse
 * @package codenixsv\Patterns\Creational\FactoryMethod
 */
class BrickHouse implements HouseInterface
{
    /**
     * @var int
     */
    private $width;

    /**
     * @var int
     */
    private $height;

    /**
     * @var string
     */
    private $material;

    public function __construct(int $width, int $height)
    {
        $this->height = $height;
        $this->width = $width;
        $this->material = 'bricks';
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @return string
     */
    public function getMaterial(): string
    {
        return $this->material;
    }
}
