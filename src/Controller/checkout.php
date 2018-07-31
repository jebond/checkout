<?php
namespace Controller {
    class checkout
    {
        public function showcheckout($orderid)
        {
            require 'app/views/checkout.php';
        }

        public function notfound($message)
        {
            require 'app/views/badrequest.php';
        }
    }
}