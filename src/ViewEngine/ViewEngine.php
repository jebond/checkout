<?php

namespace ViewEngine;
use Twig;

class ViewEngine
{
    /**
     * ViewEngine constructor.
     */
    public function __construct()
{
    $loader = new \Twig_Loader_Filesystem('app/views');
    $twig = new Twig\Environment($loader,array('debug' => true));
    $twig->addExtension(new \Twig_Extension_Debug());
    return $twig;
}
}