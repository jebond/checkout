<?php
namespace Controller {
    class checkout
    {
        public function showcheckout($orderid)
        {
            require 'app/views/checkout.php';
        }

        public function notfound()
        {
            require 'app/views/404.php';
        }
    }
}