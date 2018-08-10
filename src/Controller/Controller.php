<?php
namespace Controller {

    use Controller\ClassAbstract\AbsCkeckoutController;
    use System\System;

    class Controller extends AbsCkeckoutController
    {
        private $System;
        private $ViewEngine;
        /**
         * @param System $System;
         */
        public function __construct(System $System)
        {
            $this->System = $System;
        }

        /**
         * @param $orderid
         */
        public function Checkout($orderid)
        {
            $itemarray = array();
            $ordershipping = 25.11;
            $total = 0;
            array_push($itemarray,array('description'=>'Test description 1','name'=>'Test Item 1','price'=>44.16));
            array_push($itemarray,array('name'=>'Test Item 2','description'=>'Test description 2','price'=>234.55));
            array_push($itemarray,array('name'=>'Test Item 3','description'=>'Test description 3','price'=>15.52));

            foreach ($itemarray as $price) {
                $total += $price['price'];
            }

            $finaltotal = $total + $ordershipping;
            $itemcount = sizeof($itemarray);

            $viewoptions = array(
                'orderid'=>$orderid,
                'cart'=>$itemarray,
                'baseurl'=>'http://localhost/',
                'total'=>(float)$total,
                'itemcount'=>$itemcount,
                'shipping'=>$ordershipping,
                'finaltotal'=>$finaltotal);

            try{
                $this->ViewEngine = $this->System->getViewEngine('checkout.php',$viewoptions);
                echo $this->ViewEngine;
            }
            catch (\Exception $ex){
                throw new \RuntimeException("can't render template, man!");
            }
        }

        public function Action($action,$transactionid,$batchid)
        {
            $viewoptions = array('action'=>$action,'transactionid'=>$transactionid,'batchid'=>$batchid);

            try{
                $view = $this->System->getViewEngine('action.php',$viewoptions);
                echo $view->render(array('data'=>'test'));
            }
            catch (\Exception $ex){
                throw new \RuntimeException("can't render template, man!");
            }
        }

        public function notfound($message)
        {
            try{
                $view = $this->System->getViewEngine('badrequest.php');
                echo $view->render(array('message'=>'Order ID not passed or not found!'));
            }
            catch (\Exception $ex){
                throw new \RuntimeException("cant render template, man!");
            }
        }

    }
}