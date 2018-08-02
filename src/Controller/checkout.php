<?php
namespace Controller {

    use Controller\ClassAbstract\AbsCkeckoutController;

    class checkout extends AbsCkeckoutController
    {
        public function showview($orderid)
        {
            require 'app/views/checkout.php';
        }

        public function notfound($message)
        {
            require 'app/views/badrequest.php';
        }
    }
}