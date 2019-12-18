<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Structural\Decorator;

/**
 * Class Burger
 * @package codenixsv\Patterns\Structural\Decorator
 */
class Burger implements BurgerInterface
{
    /**
     * @return int
     */
    public function getPrice(): int
    {
        return 5;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return 'Burger';
    }
}
