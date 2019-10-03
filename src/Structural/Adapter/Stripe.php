<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Structural\Adapter;

/**
 * Class Stripe
 * @package codenixsv\Patterns\Structural\Adapter
 */
class Stripe implements PaymentSystemInterface
{
    /**
     * @param int $amount
     * @return string
     */
    public function pay(int $amount): string
    {
        return 'Paying via Stripe. Amount: ' . (string)$amount;
    }
}
