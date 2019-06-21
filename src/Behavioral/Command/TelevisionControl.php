<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Behavioral\Command;

/**
 * Class TelevisionControl
 * @package codenixsv\Patterns\Behavioral\Command
 */
class TelevisionControl implements Control
{
    public function turnOn(): string
    {
        return 'Turning On television';
    }

    public function turnOff(): string
    {
        return 'Turning Off television';
    }
}
