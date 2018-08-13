<?php

interface IPaymentProvider
{
    function createClient();
    function ccSale();
    function ccVoid();
    function ccCredit();
}