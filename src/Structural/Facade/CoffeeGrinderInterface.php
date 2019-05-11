<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Structural\Facade;

/**
 * Interface CoffeeMachineInterface
 * @package codenixsv\Patterns\Structural\Facade
 */
interface CoffeeGrinderInterface
{
    public function load();

    public function grind();
}
