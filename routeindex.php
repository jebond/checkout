<?php

namespace system {
    require 'vendor/autoload.php';
    use Controller\checkout;
    use Controller\action;
    $request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

// Route it up!
    switch ($request_uri[0]) {
        // main checkout
        case '/checkout':
            if(isset($request_uri[1])){
                $controller = new checkout();
                $controller->showcheckout($request_uri[1]);
            } else {
                $controller = new checkout();
                $controller->notfound("Order id not found");
            }
            break;
        // backend api endpoint
        case '/action':
            $controller = new action();
            $controller->batchsettlement();
            break;
        // Everything else
        default:
            header('HTTP/1.0 404 Not Found');
            require 'app/views/404.php';
            break;
    }
}