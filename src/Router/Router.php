<?php

namespace Router;

class Router
{
    private $System = null;
    private $container = null;
    private $builder = null;
    private $router = null;

    public function __construct()
    {
        $this->builder = new \DI\ContainerBuilder();
        $this->builder->useAnnotations(false);
        $this->container = $this->builder->build();

        try
        {
            $this->System = $this->container->get('System\System');
        }
        catch (Exception $ex) {
            throw new \RuntimeException('Died creating system object with injection');
        }

        try {
            $Controller = $this->container->get('Controller\Controller');
        } catch (Exception $ex) {
            throw new \RuntimeException('Died creating controller object with injection');
        }

        $this->router = $this->System->getRouter();

        $this->router->respond('GET', '/checkout/[:orderid]', function ($request) use ($Controller) {
            $Controller->Checkout($request->orderid);
        });

        $this->router->respond('GET', '/checkout', function () use ($Controller) {
            $message = 'Order id Not defined';
            $Controller->notfound($message);
        });

        $this->router->respond('GET', '/action/[:action]/[:parameter]', function ($request) use ($Controller) {
            $Controller->action($request->action,$request->parameter);
        });

        $this->router->respond('GET', '/action', function ($request) use ($Controller){
            $message = 'Action Not specified';
            $Controller->notfound($message);
        });

        $this->router->dispatch();
    }
}