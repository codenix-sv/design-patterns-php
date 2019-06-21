<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Behavioral\Command;

/**
 * Class Invoker
 * @package codenixsv\Patterns\Behavioral\Command
 */
class Invoker
{
    /**
     * @var Command
     */
    private $command;

    /**
     * @param Command $command
     */
    public function setCommand(Command $command): void
    {
        $this->command = $command;
    }

    /**
     * @return string
     */
    public function submit(): string
    {
        return $this->command->execute();
    }
}
