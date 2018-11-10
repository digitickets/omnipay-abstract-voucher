<?php

namespace DigiTickets\OmnipayAbstractVoucher;

interface VoucherResponseInterface
{
    public function isSuccessful(): bool;

    /**
     * @return string|null
     */
    public function getMessage();
}