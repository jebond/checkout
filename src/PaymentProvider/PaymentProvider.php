<?php

namespace PaymentProvider;
use System\System;

class PaymentProvider extends \AbsPaymentProvider
{
    /**
     * PaymentProvider constructor.
     * @param System $system
     */
    function __construct(System $system)
    {

    }

    /**
     * @return mixed|void
     */
    function createClient(){

    }

    /**
     * @return mixed|void
     */
    function ccSale(){

    }

    /**
     * @return mixed|void
     */
    function ccVoid(){

    }

    /**
     * @return mixed|void
     */
    function ccCredit(){

    }
}