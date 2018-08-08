<?php
use ErrorHandling\ErrorHandling;
use Twig;
class System
{
    public function __construct(ErrorHandling $handler,Twig\Environment $twig)
    {
        echo isset($handler);
        echo isset($twig);
    }
}