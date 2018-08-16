<?php

namespace System {
    use ErrorHandling\ErrorHandling;
    use Klein\Klein;
    use ErrorLogging;
    use ViewEngine\ViewEngine;
    use Legacy\LegacyCheckout;

    class System
    {
        protected $ErrorLogger;
        protected $ViewEngine;
        protected $Router;
        protected $ErrorHandler;
        protected $LCheckout;
        /**
         * System constructor.
         * @param ErrorHandling             $handler
         * @param ViewEngine                $view
         * @param Klein                     $klein
         * @param ErrorLogging\ErrorLogging $logger
         * @param LegacyCheckout $LCheckout
         */
        public function __construct(ErrorHandling $handler, ViewEngine $view, Klein $klein, ErrorLogging\ErrorLogging $logger,LegacyCheckout $LCheckout) {
            $this->Router = $klein;
            $this->ErrorHandler = $handler;
            $this->ViewEngine = $view;
            $this->ErrorLogger = $logger;
            $this->LCheckout = $LCheckout;
        }

        /**
         * @return ErrorHandling
         */
        public function getErrorHandler(){
            return $this->ErrorHandler;
        }

        /**
         * @param $viewname
         * @param $viewoptions
         * @return mixed
         */
        public function getViewEngine($viewname,$viewoptions){
            $view = new $this->ViewEngine();
            return $view->render($viewname,$viewoptions);
        }

        /**
         * @return Klein
         */
        public function getRouter(){
            return $this->Router;
        }

        /**
         * @return ErrorLogging\ErrorLogging
         */
        public function getErrorLogger(){
            return $this->ErrorLogger;
        }

        public function getLCheckout(){
            return $this->LCheckout;
        }
    }
}