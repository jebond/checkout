<?php

namespace Controller\interfaces;


interface IController
{
    public function showview($orderid);
    public function notfound($message);
}