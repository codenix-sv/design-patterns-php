<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Structural\Facade;

/**
 * Class Barista
 * @package codenixsv\Patterns\Structural\Facade
 */
class Barista
{
    /**
     * @var CoffeeGrinderInterface
     */
    private $coffeeGrinder;

    /**
     * @var CoffeeMachineInterface
     */
    private $coffeeMachine;

    /**
     * Barista constructor.
     * @param CoffeeGrinderInterface $coffeeGrinder
     * @param CoffeeMachineInterface $coffeeMachine
     */
    public function __construct(CoffeeGrinderInterface $coffeeGrinder, CoffeeMachineInterface $coffeeMachine)
    {
        $this->coffeeGrinder = $coffeeGrinder;
        $this->coffeeMachine = $coffeeMachine;
    }

    public function makeCoffee()
    {
        $this->coffeeGrinder->load();
        $this->coffeeGrinder->grind();

        $this->coffeeMachine->load();
        $this->coffeeMachine->make();
    }
}
