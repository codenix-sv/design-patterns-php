<?php
declare(strict_types=1);

namespace codenixsv\Patterns\Structural\Adapter;

/**
 * Class PaymentService
 * @package codenixsv\Patterns\Structural\Adapter
 */
class PaymentService
{
    /**
     * @var PaymentSystemInterface
     */
    private $paymentSystem;

    /**
     * PaymentService constructor.
     * @param PaymentSystemInterface $paymentSystem
     */
    public function __construct(PaymentSystemInterface $paymentSystem)
    {
        $this->paymentSystem = $paymentSystem;
    }

    /**
     * @param int $amount
     * @return string
     */
    public function makePayment(int $amount)
    {
        return $this->paymentSystem->pay($amount);
    }
}
