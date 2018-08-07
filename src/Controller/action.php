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
            echo "<h1>Batch Settlement</h1>";
        }

        public function notfound($message)
        {
            require 'app/views/404.php';
        }
    }
}