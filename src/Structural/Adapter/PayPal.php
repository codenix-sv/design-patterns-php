<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Structural\Adapter;

/**
 * Class PayPal
 * @package codenixsv\Patterns\Structural\Adapter
 */
class PayPal implements PaymentSystemInterface
{
    /**
     * @param int $amount
     * @return string
     */
    public function pay(int $amount): string
    {
        return 'Paying via PayPal. Amount: ' . (string)$amount;
    }
}
