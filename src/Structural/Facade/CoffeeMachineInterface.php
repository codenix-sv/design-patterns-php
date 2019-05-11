<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Structural\Facade;

/**
 * Interface CoffeeMachineInterface
 * @package codenixsv\Patterns\Structural\Facade
 */
interface CoffeeMachineInterface
{
    public function load();

    public function make();
}
