<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Structural\Facade;

/**
 * Class CoffeeMachine
 * @package codenixsv\Patterns\Structural\Facade
 */
class CoffeeMachine implements CoffeeMachineInterface
{
    public function load()
    {
        echo 'Load coffee to coffee machine';
    }

    public function make()
    {
        echo 'Make coffee';
    }
}
