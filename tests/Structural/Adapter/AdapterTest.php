<?php
declare(strict_types=1);

namespace codenixsv\Patterns\tests\Structural\Adapter;

use codenixsv\Patterns\Structural\Adapter\PaymentService;
use codenixsv\Patterns\Structural\Adapter\PayPal;
use codenixsv\Patterns\Structural\Adapter\Stripe;
use codenixsv\Patterns\Structural\Adapter\WebMoney;
use codenixsv\Patterns\Structural\Adapter\WebMoneyAdapter;
use PHPUnit\Framework\TestCase;

/**
 * Class AdapterTest
 * @package codenixsv\Patterns\tests\Structural\Adapter
 */
class AdapterTest extends TestCase
{
    public function testMakePaymentPayPal()
    {
        $payPal = new PayPal();
        $paymentService = new PaymentService($payPal);

        $result = $paymentService->makePayment(500);

        $this->assertEquals('Paying via PayPal. Amount: 500', $result);
    }

    public function testMakePaymentStripe()
    {
        $stripe = new Stripe();
        $paymentService = new PaymentService($stripe);

        $result = $paymentService->makePayment(300);

        $this->assertEquals('Paying via Stripe. Amount: 300', $result);
    }

    public function testMakePaymentWebMoneyAdapter()
    {
        $webMoney = new WebMoney();
        $adapter = new WebMoneyAdapter($webMoney);
        $paymentService = new PaymentService($adapter);

        $result = $paymentService->makePayment(200);

        $this->assertEquals('Paying via WebMoney. Amount: 200', $result);
    }
}
