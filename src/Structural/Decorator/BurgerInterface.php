<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Structural\Decorator;

/**
 * Interface BurgerInterface
 * @package codenixsv\Patterns\Structural\Decorator
 */
interface BurgerInterface
{
    /**
     * @return int
     */
    public function getPrice(): int;

    /**
     * @return string
     */
    public function getDescription(): string;
}
