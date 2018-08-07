<?php
namespace Controller {

    use Twig;

    class action
    {
        public function transactionSearch($message)
        {
            $loader = new \Twig_Loader_Filesystem('app/views');
            $twig = new Twig\Environment($loader);
            try{
                $view = $twig->load('action.php');
                echo $view->render(array('message'=>$message));
            }
            catch (\Exception $ex){
                throw new \RuntimeException("cant render template, man!");
            }
        }

        public function batchsettlement($message){

            $loader = new \Twig_Loader_Filesystem('app/views');
            $twig = new Twig\Environment($loader);
            try{
                $view = $twig->load('action.php');
                echo $view->render(array('message'=>$message));
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
                $view = $twig->load('action.php');
                echo $view->render(array('message'=>$message));
            }
            catch (\Exception $ex){
                throw new \RuntimeException("cant render template, man!");
            }
        }
    }
}