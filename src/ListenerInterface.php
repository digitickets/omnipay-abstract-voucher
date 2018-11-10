<?php

namespace DigiTickets\OmnipayAbstractVoucher;

interface ListenerInterface
{
    public function update($action, $data);
}