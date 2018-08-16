<?php

interface IPaymentProvider
{
    /**
     * @return mixed
     */
    function createClient();

    /**
     * @return mixed
     */
    function ccSale();

    /**
     * @return mixed
     */
    function ccVoid();

    /**
     * @return mixed
     */
    function ccCredit();
}