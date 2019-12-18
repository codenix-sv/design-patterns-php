<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Structural\Decorator;

/**
 * Class CheeseBurger
 * @package codenixsv\Patterns\Structural\Decorator
 */
class CheeseBurger implements BurgerInterface
{
    /**
     * @var BurgerInterface
     */
    private $burger;

    /**
     * CheeseBurger constructor.
     * @param BurgerInterface $burger
     */
    public function __construct(BurgerInterface $burger)
    {
        $this->burger = $burger;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->burger->getPrice() + 2;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->burger->getDescription() . ' with cheese';
    }
}
