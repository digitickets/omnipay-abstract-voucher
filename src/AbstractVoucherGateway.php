<?php

namespace DigiTickets\OmnipayAbstractVoucher;

use Omnipay\Common\AbstractGateway;

/**
 * This class allows vouchers to be used as payment methods. We extend the Omnipay gateway class because systems need
 * to be able to talk to the vocuher provider as if they were a "real" payment gateway. Certain Omnipay methods become
 * wrappers around the voucher methods. For example, authorize() just calls validate(), purchase() calls validate() then
 * redeem().
 */
abstract class AbstractVoucherGateway extends AbstractGateway
{
    /**
     * @var ListenerInterface[]
     */
    private $listeners = [];

    abstract public function validate(array $parameters = array());

    abstract public function redeem(array $parameters = array());

    abstract public function unredeem(array $parameters = array());

    public function register($listener)
    {
error_log('[Driver] Yay, something is adding a listener!');
        $this->listeners[] = $listener;
    }

    public function getListeners()
    {
error_log('[Driver] Returning the listeners');
        return $this->listeners;
    }
}