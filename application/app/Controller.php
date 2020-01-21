<?php


namespace application\app;

use application\app\View;
use application\lib\Db;

abstract class Controller
{
    public $route;
    public $view;
    public $model;

    public function __construct($route)
    {
        $this->route = $route;
        $this->view = new View($route);
        $this->model = $this->loadModel($route['controller']);
    }

    public function loadModel($name)
    {
        $path = 'application\models\\' . ucfirst($name);

        if (class_exists($path)) {
            return new $path();
        }

        return false;
    }
}