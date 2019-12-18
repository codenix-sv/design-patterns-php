<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Structural\Decorator;

/**
 * Class AvocadoBurger
 * @package codenixsv\Patterns\Structural\Decorator
 */
class AvocadoBurger implements BurgerInterface
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
        return $this->burger->getPrice() + 3;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->burger->getDescription() . ' with avocado';
    }
}
