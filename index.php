<?php

require 'vendor/autoload.php';

$router = new AltoRouter();

// map homepage
$router->map( 'GET', '/', function() {
    require 'src/app/views/checkout.php';
});

// map users details page
$router->map( 'GET|POST', '/action/', function() {
  require 'src/app/views/action.php';
});

?>
