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
            $itemarray = array('description'=>'Test description 1','name'=>'Test Item 1','price'=>12);
            try{
                $view = $twig->load('checkout.php');
                echo $view->render(array('orderid'=>$orderid,'cartitems'=>$itemarray,'baseurl'=>'http://localhost/'));
            }
            catch (\Exception $ex){
                throw new \RuntimeException("cant render template, man!");
            }
        }

        public function notfound($message)
        {
            $loader = new \Twig_Loader_Filesystem('app/views');
            $twig = new Twig\Environment($loader);
            try{
                $view = $twig->load('badrequest.php');
                echo $view->render(array('message'=>'Order ID not passed or not found!'));
            }
            catch (\Exception $ex){
                throw new \RuntimeException("cant render template, man!");
            }
        }
    }
}