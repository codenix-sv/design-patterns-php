<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Behavioral\Command;

/**
 * Class TurnOnTelevision
 * @package codenixsv\Patterns\Behavioral\Command
 */
class TurnOnTelevision implements Command
{
    /**
     * @var Control
     */
    private $televisionControl;

    /**
     * TurnOnTelevision constructor.
     * @param Control $televisionControl
     */
    public function __construct(Control $televisionControl)
    {
        $this->televisionControl = $televisionControl;
    }

    /**
     * @return string
     */
    public function execute(): string
    {
        return $this->televisionControl->turnOn();
    }
}
