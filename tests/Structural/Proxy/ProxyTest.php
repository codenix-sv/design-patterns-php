<?php
declare(strict_types=1);

namespace codenixsv\Patterns\tests\Structural\Proxy;

use codenixsv\Patterns\Structural\Proxy\CachedProductStorage;
use codenixsv\Patterns\Structural\Proxy\ProductManager;
use codenixsv\Patterns\Structural\Proxy\ProductStorage;
use PHPUnit\Framework\TestCase;

/**
 * Class ProxyTest
 * @package codenixsv\Patterns\tests\Structural\Proxy
 */
class ProxyTest extends TestCase
{
    public function testGetProductFromCache()
    {
        $productStorage = new ProductStorage();
        $cachedStorage = new CachedProductStorage($productStorage);

        $manager = new ProductManager($cachedStorage);

        $this->assertEquals('Product data. Id: 1', $manager->getProduct(1));
        $this->assertEquals('Product data. Id: 1. From cache', $manager->getProduct(1));
    }
}
