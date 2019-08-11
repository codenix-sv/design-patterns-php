<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Creational\AbstractFactory;

/**
 * Class WoodenChair
 * @package codenixsv\Patterns\Creational\AbstractFactory
 */
class WoodenChair implements ChairInterface
{
    /**
     * @var string
     */
    private $color;

    /**
     * @var bool
     */
    private $hasLegs;

    /**
     * WoodenChair constructor.
     * @param string $color
     * @param bool $hasLegs
     */
    public function __construct(string $color, bool $hasLegs)
    {
        $this->color = $color;
        $this->hasLegs = $hasLegs;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return bool
     */
    public function hasLegs(): bool
    {
        return $this->hasLegs;
    }

    /**
     * @return string
     */
    public function getMaterial(): string
    {
        return 'wood';
    }
}
