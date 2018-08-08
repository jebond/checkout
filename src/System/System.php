<?php

namespace System {
    use ErrorHandling\ErrorHandling;
    use Klein\Klein;
    use Monolog;
    use ViewEngine\ViewEngine;

    class System
    {
        public $Log;
        public $Twig;
        public $Klein;
        public $Handler;
        public $retArr =array();

        public function __construct(ErrorHandling $handler, ViewEngine $view, Klein $klein, Monolog\Logger $logger) {
            $this->Klein = $klein;
            $this->Handler = $handler;
            $this->Twig = $view;
            $this->Log = $logger;
            $this->retArr= array($this->Klein,$this->Twig,$this->Log,$this->Handler);
            return $this->retArr;
        }
    }
}