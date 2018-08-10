<?php

namespace Controller\ClassAbstract;
use Controller\interfaces\IController;
use twig;
abstract class AbsCkeckoutController implements IController
{

    function __construct()
    {

    }

    public function notfound($message)
    {

    }

    public function Checkout($orderid)
    {

    }

    public function Action($action,$transactionid,$batchid)
    {

    }
}