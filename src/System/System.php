<?php
use ErrorHandling\ErrorHandling;
use Klein\Klein;


class System
{
    public $Log;
    public $Twig;
    public $Klein;
    public $Handler;

    public function __construct(ErrorHandling $handler,Twig\Environment $twig,Klein $klein,Monolog\Logger $logger)
    {
        $this->Klein = $klein;
        $this->Handler = $handler;
        $this->Twig = $twig;
        $this->Log = $logger;
    }
}