<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Behavioral\Command;

/**
 * Interface Command
 * @package codenixsv\Patterns\Behavioral\Command
 */
interface Command
{
    /**
     * @return string
     */
    public function execute(): string;
}
