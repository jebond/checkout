<?php

namespace ViewEngine;
use Twig;

class ViewEngine
{
    private $twig;

    public function __construct()
    {
        $loader = new \Twig_Loader_Filesystem('app/views');
        $this->twig = new Twig\Environment($loader,array('debug' => true));
        $this->twig->addExtension(new \Twig_Extension_Debug());
    }
    public function render($viewname,$viewoptions){
        return $this->twig->render($viewname,$viewoptions);
    }
}