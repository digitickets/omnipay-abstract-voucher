<?php

namespace DigiTickets\OmnipayAbstractVoucher;

abstract class AbstractMessage
{
    const REQUEST_TYPE = '!';

    /**
     * @var string $voucherNumber
     */
    private $voucherNumber;

    /**
     * @var float|null The value that was redeemed from this voucher in this redemption (it's not always the total value of the voucher).
     */
    private $allocationAmount;

    /**
     * @var string|null
     */
    private $transactionId;

    /**
     * @var string|null A reference to the line(s) that the host system has redeemed the voucher against.
     */
    private $orderLineRef;

    public function __construct(string $voucherNumber, float $allocationAmount = null, string $transactionId = null, string $orderLineRef = null)
    {
        $this->voucherNumber = $voucherNumber;
        $this->allocationAmount = $allocationAmount;
        $this->transactionId = $transactionId;
        $this->orderLineRef = $orderLineRef;
    }

    public function getVoucherNumber(): string
    {
        return $this->voucherNumber;
    }

    /**
     * @return float|null
     */
    public function getAllocationAmount()
    {
        return $this->allocationAmount;
    }

    public function getOrderLineRef(): string
    {
        return $this->orderLineRef;
    }

    /**
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    public function getRequestType(): string
    {
        assert(static::REQUEST_TYPE != self::REQUEST_TYPE, 'Request type must be specified in the subclass');

        return static::REQUEST_TYPE;
    }
}
