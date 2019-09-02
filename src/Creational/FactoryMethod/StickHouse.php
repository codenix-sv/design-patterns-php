<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Creational\FactoryMethod;

/**
 * Class StickHouse
 * @package codenixsv\Patterns\Creational\FactoryMethod
 */
class StickHouse implements HouseInterface
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
        $this->material = 'sticks';
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
