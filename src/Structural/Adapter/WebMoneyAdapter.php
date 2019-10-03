<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Structural\Adapter;

/**
 * Class WebMoneyAdapter
 * @package codenixsv\Patterns\Structural\Adapter
 */
class WebMoneyAdapter implements PaymentSystemInterface
{
    /**
     * @var WebMoney
     */
    private $webMoney;

    /**
     * WebMoneyAdapter constructor.
     * @param WebMoney $webMoney
     */
    public function __construct(WebMoney $webMoney)
    {
        $this->webMoney = $webMoney;
    }

    /**
     * @param int $amount
     * @return string
     */
    public function pay(int $amount): string
    {
        return $this->webMoney->sendPayment($amount);
    }
}
