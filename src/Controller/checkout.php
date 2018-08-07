<?php
namespace Controller {

    use Controller\ClassAbstract\AbsCkeckoutController;
    use Twig;

    class checkout extends AbsCkeckoutController
    {
        public function showview($orderid)
        {
            $loader = new \Twig_Loader_Filesystem('app/views');
            $twig = new Twig\Environment($loader);
            try{
                $view = $twig->load('checkout.php');
                echo $view->render(array('orderid'=>$orderid));
            }
            catch (\Exception $ex){
                throw new \RuntimeException("cant render template, man!");
            }

            require 'app/views/checkout.php';
        }

        public function notfound($message)
        {
            require 'app/views/badrequest.php';
        }
    }
}