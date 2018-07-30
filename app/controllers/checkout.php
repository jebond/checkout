<?php

namespace controllers{

    class checkout {
        public function showcheckout($orderid){
            require '../views/checkout.php';
    }
        public function notfound() {
            require '../views/404.php';
        }
    }
}