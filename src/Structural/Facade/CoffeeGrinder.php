<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Structural\Facade;

/**
 * Class CoffeeGrinder
 * @package codenixsv\Patterns\Structural\Facade
 */
class CoffeeGrinder implements CoffeeGrinderInterface
{
    public function load()
    {
        echo 'Load coffee to coffee grinder';
    }

    public function grind()
    {
        echo 'Grind coffee';
    }
}
