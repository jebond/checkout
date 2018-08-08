<?php

    require 'vendor/autoload.php';
    require 'src/System/App.php';
    /*
     *  This using section will be replaced with an app object that will create a di container. All of these objects will be passed into the container and then referenced in the app.
     *  the system class will create the container and should be global namespaced and psr-4 autoloaded.
     */
    use Controller\checkout;
    use Controller\action;
    use Klein\Klein;
    use ErrorHandling\ErrorHandling;

    /*
     * These object creation statements should go away once the DI container is created. The controller will be passed instances of any classes it requires like the router
     * the error handling and the controller classes.
     */

    $router = new Klein();
    $error = new ErrorHandling();

    try{

     $router->respond('GET','/checkout/[:orderid]',function ($request) {
        $controller = new checkout();
        if(isset($request->orderid)){
            $controller->showview($request->orderid);
        } else {
            $controller->notfound("Order id not found");
        }
    });

    $router->respond('GET','/checkout',function () {
        $controller = new checkout();
            $message = 'Not Found Weirdo';
            $controller->notfound($message);
    });

    $router->respond('GET','/action/[:action]/[:parameter]',function ($request) {
        $controller = new action();
        switch ($request->action){
            case $action = 'batch';
                $controller->batchsettlement("This was a batch settlement for batch ".$request->parameter);
                break;
            case $action = 'search';
                $controller->transactionSearch("This was a search transaction ".$request->parameter);
                break;
            default:
                $controller->notfound("Action not found");
                break;
        }

        });

    $router->respond('GET','/action',function ($request) {
        $controller = new action();
            $message = 'Action not found';
            $controller->notfound($message);
        });

        $router->dispatch();

    }
    catch (\Exception $e) {
        throw new \RuntimeException($e->getMessage());
    }