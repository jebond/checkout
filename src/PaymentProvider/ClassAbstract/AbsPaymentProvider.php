<?php

abstract class AbsPaymentProvider implements IPaymentProvider
{
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
     *
     */
    function ccCredit(){

    }
}