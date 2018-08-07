<?php
namespace Controller {

    use Controller\ClassAbstract\AbsCkeckoutController;
    use Twig;

    class checkout extends AbsCkeckoutController
    {
        /**
         * @param $orderid
         */
        public function showview($orderid)
        {
            $loader = new \Twig_Loader_Filesystem('app/views');
            $twig = new Twig\Environment($loader,array('debug' => true));
            $twig->addExtension(new \Twig_Extension_Debug());
            $itemarray = array();
            $total = 0;
            array_push($itemarray,array('description'=>'Test description 1','name'=>'Test Item 1','price'=>44));
            array_push($itemarray,array('name'=>'Test Item 2','description'=>'Test description 2','price'=>234));

            foreach ($itemarray as $price) {
                $total += $price['price'];
            }

            try{
                $view = $twig->load('checkout.php');
                echo $view->render(array('orderid'=>$orderid,'cart'=>$itemarray,'baseurl'=>'http://localhost/','total'=>$total));
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