<?php

namespace ViewEngine;
use Twig;

class ViewEngine
{
    private $twig;

    public function __construct($viewname = null)
    {
        $loader = new \Twig_Loader_Filesystem('app/views');
        $this->twig = new Twig\Environment($loader,array('debug' => true));
        $this->twig->addExtension(new \Twig_Extension_Debug());
        if($viewname === null){
            return null;
        }
        else{
            return $this->twig->load($viewname);
        }
    }
    public function render(array $viewoptions){
        $this->twig->render($viewoptions);
    }
}