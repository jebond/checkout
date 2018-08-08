<?php
use DI\Container;

class App
{
    public $registry;
    public $system;

    function __construct()
    {
        $this->registry = new Container($definitionmanager = null,$proxyfactory = null);
        try{
            $system = $this->registry->get('System');
            return $system;
        } catch (Exception $ex) {
            throw new \RuntimeException($ex->getMessage());
        }
    }
}