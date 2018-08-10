<?php

namespace ErrorLogging;
use Monolog\Logger;
use Monolog\Handler;

class ErrorLogging
{
    protected $logger;
    protected $stream;

    public function __construct()
    {
        $this->stream = new Handler\StreamHandler($_SERVER['DOCUMENT_ROOT'].'/app/log/checkout.log',LOGGER::DEBUG);
        $this->logger = new Logger('ErrorLog');
        $this->logger->pushHandler($this->stream);
        return $this->logger;
    }

    public function logDebug($error){
        $this->logger->debug($error);
    }

    public function logError($error){
        $this->logger->debug($error);
    }
}