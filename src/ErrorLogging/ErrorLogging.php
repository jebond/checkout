<?php

namespace ErrorLogging;
use Monolog;

class ErrorLogging
{
    public $logger;

    public function __construct()
    {
        $this->logger = new Monolog\Logger('ErrorLog');
        return $this->logger;
    }
}