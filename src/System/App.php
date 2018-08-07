<?php
use DI\Container;

class App
{
    public $registry;

    function __construct()
    {
        $this->registry = new Container();
    }
}