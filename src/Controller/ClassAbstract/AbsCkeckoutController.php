<?php
/**
 * Created by PhpStorm.
 * User: jebond
 * Date: 8/2/2018
 * Time: 2:09 PM
 */

namespace Controller\ClassAbstract;
use Controller\interfaces\IController;

abstract class AbsCkeckoutController implements IController
{
    public function showview($orderid)
    {
        // TODO: Implement showview() method.
    }

    public function notfound($message)
    {
        // TODO: Implement notfound() method.
    }


}