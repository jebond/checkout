<?php

namespace System {
    use ErrorHandling\ErrorHandling;
    use Klein\Klein;
    use ErrorLogging;
    use ViewEngine\ViewEngine;

    class System
    {
        private $ErrorLogger;
        private $ViewEngine;
        private $Router;
        private $ErrorHandler;

        public function __construct(ErrorHandling $handler, ViewEngine $view, Klein $klein, ErrorLogging\ErrorLogging $logger) {
            $this->Router = $klein;
            $this->ErrorHandler = $handler;
            $this->ViewEngine = $view;
            $this->ErrorLogger = $logger;
        }

        public function getErrorHandler(){
            return $this->ErrorHandler;
        }

        public function getViewEngine($viewname){
            return new $this->ViewEngine($viewname);
        }

        public function getRouter(){
            return $this->Router;
        }

        public function getErrorLogger(){
            return $this->ErrorLogger;
        }
    }
}