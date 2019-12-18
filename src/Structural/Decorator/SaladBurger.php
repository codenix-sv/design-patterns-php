<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Structural\Decorator;

/**
 * Class SaladBurger
 * @package codenixsv\Patterns\Structural\Decorator
 */
class SaladBurger implements BurgerInterface
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
        return $this->burger->getPrice() + 1;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->burger->getDescription() . ' with salad';
    }
}
