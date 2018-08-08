<?php
use DI\Container;

class App
{
    public $registry;

    function __construct()
    {
        $this->registry = new Container($definitionmanager = null,$proxyfactory = null);
        try{
            $system = $this->registry->get('System');
            require 'app/views/badrequest.php';
        } catch (Exception $ex) {
            throw new \RuntimeException($ex->getMessage());
        }

    }
}