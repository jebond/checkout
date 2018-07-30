<?php

namespace system {

    require 'vendor/autoload.php';
//uses mod_rewrite in .htaccess file to redirect all requests to routeindex.php
    use controllers\checkout;
    require_once ('app/controllers/checkout.php');
// Grabs the URI and breaks it apart in case we have query string stuff
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
                $controller->notfound();
            }
            break;
        // backend api endpoint
        case '/action':
            require 'app/views/action.php';
            break;
        // Everything else
        default:
            header('HTTP/1.0 404 Not Found');
            require 'app/views/404.php';
            break;
    }
}