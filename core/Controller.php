<?php
class Controller 
{
    protected function model($model) 
    {
        require_once __DIR__ . "/../app/models/$model.php";
        return new $model();
    }



    protected function view($view, $data = []) 
    {
        require_once __DIR__ . "/../app/views/$view.php";
    }
}