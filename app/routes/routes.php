<?php
require ' /var/www/tntdev9.trollandtoad.com/ssl/secure/newcheckout/vendor/autoload.php';

$router = new AltoRouter();

// map homepage
$router->map( 'GET', '/', function() {
    require 'app/views/checkout.php';
});

// map users details page
$router->map( 'GET|POST', '/action/', function() {
  require '/app/views/action.php';
});
