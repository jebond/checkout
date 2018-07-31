<?php
namespace Controller {
    class action
    {
        public function transactionSearch($transactionid)
        {
            require 'app/views/checkout.php';
        }

        public function batchsettlement(){
            //do some stuff;
            echo "Dang";
        }

        public function notfound($message)
        {
            require 'app/views/404.php';
        }
    }
}