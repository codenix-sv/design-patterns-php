<?php
declare(strict_types=1);

namespace codenixsv\Patterns\tests\Creational\Singleton;

use PHPUnit\Framework\TestCase;
use codenixsv\Patterns\Creational\Singleton\Singleton;

/**
 * Class SingletonTest
 * @package codenixsv\Patterns\tests\Creational\Singleton
 */
class SingletonTest extends TestCase
{
    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
}
