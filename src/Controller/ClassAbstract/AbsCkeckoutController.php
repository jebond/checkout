<?php

namespace Controller\ClassAbstract;
use Controller\interfaces\IController;
use twig;
abstract class AbsCkeckoutController implements IController
{
    function __construct()
    {
      //  $template = new twig->twig\;
    }

    public function showview($orderid)
    {
        // TODO: Implement showview() method.
    }

    public function notfound($message)
    {
        // TODO: Implement notfound() method.
    }


}