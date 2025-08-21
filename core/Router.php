<?php
try{
class Router {
    public function route($controller = 'HomeController', $method = 'index') {
        // Hier könnte eine einfache Routing-Logik implementiert werden.
        // Zum Beispiel: /controller/method

        require_once __DIR__ . "/../app/controllers/$controller.php";
        $controller = new $controller();
        $controller->$method();
    }
}
} catch(Exception $e)
{
    echo $e->getMessage();
}