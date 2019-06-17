<?php
declare(strict_types=1);

namespace codenixsv\Patterns\tests\Behavioral\ChainOfResponsibility;

use codenixsv\Patterns\Behavioral\ChainOfResponsibility\ElasticSearchStorage;
use codenixsv\Patterns\Behavioral\ChainOfResponsibility\MySQLStorage;
use PHPUnit\Framework\TestCase;

/**
 * Class ChainOfResponsibilityTest
 * @package codenixsv\Patterns\tests\Behavioral\ChainOfResponsibility
 */
class ChainOfResponsibilityTest extends TestCase
{
    /**
     * @throws \Exception
     */
    public function testFindProductFromElasticSearch()
    {
        $elasticStorage = new ElasticSearchStorage();
        $mySQLStorage = new MySQLStorage();
        $elasticStorage->setNext($mySQLStorage);
        $elasticStorage->setIsAvailable(true);

        $this->assertEquals('Product from ElasticSearch', $elasticStorage->find(5));
    }

    /**
     * @throws \Exception
     */
    public function testFindProductFromMySQL()
    {
        $elasticStorage = new ElasticSearchStorage();
        $mySQLStorage = new MySQLStorage();
        $elasticStorage->setNext($mySQLStorage);
        $elasticStorage->setIsAvailable(false);
        $mySQLStorage->setIsAvailable(true);

        $this->assertEquals('Product from MySQL', $elasticStorage->find(5));
    }

    /**
     * @throws \Exception
     */
    public function testFindProductException()
    {
        $elasticStorage = new ElasticSearchStorage();
        $mySQLStorage = new MySQLStorage();
        $elasticStorage->setNext($mySQLStorage);

        $elasticStorage->setIsAvailable(false);
        $mySQLStorage->setIsAvailable(false);

        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Product not found');

        $elasticStorage->find(5);
    }
}
