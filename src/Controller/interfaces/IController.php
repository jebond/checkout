<?php

namespace Controller\interfaces;


interface IController
{
    public function Checkout($orderid);
    public function Action($action,$transactionid,$batchid);
    public function notfound($message);

}