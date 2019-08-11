<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Creational\AbstractFactory;

/**
 * Interface TableInterface
 * @package codenixsv\Patterns\Creational\AbstractFactory
 */
interface TableInterface
{
    /**
     * @return int
     */
    public function getWight(): int;

    /**
     * @return int
     */
    public function getHeight(): int;

    /**
     * @return string
     */
    public function getMaterial(): string;
}
