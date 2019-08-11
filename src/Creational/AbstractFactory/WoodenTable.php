<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Creational\AbstractFactory;

/**
 * Class WoodenTable
 * @package codenixsv\Patterns\Creational\AbstractFactory
 */
class WoodenTable implements TableInterface
{
    /**
     * @var int
     */
    private $wight;

    /**
     * @var int
     */
    private $height;

    /**
     * WoodenTable constructor.
     * @param int $wight
     * @param int $height
     */
    public function __construct(int $wight, int $height)
    {
        $this->wight = $wight;
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getWight(): int
    {
        return $this->wight;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @return string
     */
    public function getMaterial(): string
    {
        return 'wood';
    }
}
