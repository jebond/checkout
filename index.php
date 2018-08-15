<?php
require 'vendor/autoload.php';
use Router\Router;

$troll_session_cookie = true;
if(isset($troll_session_cookie)){
    new Router();
}
else {
    echo "Go Away!";
}
