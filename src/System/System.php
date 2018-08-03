<?php

use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

class System
{
    function __construct()
    {
        //register whoops
        $whoops = new Run();
        $whoops->pushHandler(new PrettyPageHandler());
        $whoops->register();
        //register view engine
        //bla bla bla
    }
}