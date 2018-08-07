<?php

namespace ErrorHandling;

use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

class ErrorHandling
{
    function __construct()
    {
        $whoops = new Run();
        $whoops->pushHandler(new PrettyPageHandler());
        $whoops->register();
    }
}