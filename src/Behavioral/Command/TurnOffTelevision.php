<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Behavioral\Command;

/**
 * Class TurnOffTelevision
 * @package codenixsv\Patterns\Behavioral\Command
 */
class TurnOffTelevision implements Command
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
        return $this->televisionControl->turnOff();
    }
}
