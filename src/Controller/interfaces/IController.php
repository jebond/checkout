<?php

namespace Controller\interfaces;


interface IController
{
    public function Checkout($orderid);
    public function Action($action,$parameter);
    public function notfound($message);

}