<?php
declare(strict_types=1);

namespace codenixsv\Patterns\tests\Behavioral\Command;

use codenixsv\Patterns\Behavioral\Command\Invoker;
use codenixsv\Patterns\Behavioral\Command\TelevisionControl;
use codenixsv\Patterns\Behavioral\Command\TurnOffTelevision;
use codenixsv\Patterns\Behavioral\Command\TurnOnTelevision;
use PHPUnit\Framework\TestCase;

/**
 * Class CommandTest
 * @package codenixsv\Patterns\tests\Behavioral\Command
 */
class CommandTest extends TestCase
{
    public function testInvocation()
    {
        $invoker = new Invoker();
        $televisionControl = new TelevisionControl();

        $invoker->setCommand(new TurnOffTelevision($televisionControl));
        $result = $invoker->submit();
        $this->assertEquals('Turning Off television', $result);

        $invoker->setCommand(new TurnOnTelevision($televisionControl));
        $result = $invoker->submit();
        $this->assertEquals('Turning On television', $result);
    }
}
