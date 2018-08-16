<?php

namespace System {
    use ErrorHandling\ErrorHandling;
    use Klein\Klein;
    use ErrorLogging;
    use ViewEngine\ViewEngine;
    use TNTDatabase\TNTDatabase;
    use TNTShipping\TNTShipping;

    class System
    {
        protected $ErrorLogger;
        protected $ViewEngine;
        protected $Router;
        protected $ErrorHandler;
        protected  $TNTDb;
        protected $TNTShip;

        /**
         * System constructor.
         * @param ErrorHandling             $handler
         * @param ViewEngine                $view
         * @param Klein                     $klein
         * @param ErrorLogging\ErrorLogging $logger
         * @param TNTDatabase               $TntDb
         * @param TNTShipping               $TntShip
         */
        public function __construct(ErrorHandling $handler, ViewEngine $view, Klein $klein, ErrorLogging\ErrorLogging $logger,TNTDatabase $TntDb, TNTShipping $TntShip) {
            $this->Router = $klein;
            $this->ErrorHandler = $handler;
            $this->ViewEngine = $view;
            $this->ErrorLogger = $logger;
            $this->TNTDb = $TntDb;
            $this->TNTShip = $TntShip;
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

        /**
         * @return TNTDatabase
         */
        public function getTNTDB(){
            return $this->TNTDb;
        }

        /**
         * @return TNTShipping
         */
        public function getTNTShip(){
            return $this->TNTShip;
        }
    }
}