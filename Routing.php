<?php
require_once 'autoload.php';

class Routing 
{
    public function processURL(){
        $controllerName = $_GET['controller'];
        $actionName = $_GET['action'];

        $controllerClass = ucfirst($controllerName).'Controller';
        $controller = new $controllerClass;
        $controller->$actionName(ucfirst($controllerName));
    }
}


