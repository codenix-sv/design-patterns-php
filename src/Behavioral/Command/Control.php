<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Behavioral\Command;

/**
 * Interface Control
 * @package codenixsv\Patterns\Behavioral\Command
 */
interface Control
{
    /**
     * @return string
     */
    public function turnOn(): string;

    /**
     * @return string
     */
    public function turnOff(): string;
}
