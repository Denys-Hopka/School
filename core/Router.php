<?php
try{
class Router 
{
    public function route($controller = 'HomeController', $method = 'index') 
    {
        require_once __DIR__ . "/../app/controllers/$controller.php";
        $controller = new $controller();
        $controller->$method();
    }
}
}catch(Exception $e){
    echo $e->getMessage();
}