<?php


namespace application\app;

use application\app\View;
use application\lib\Db;

abstract class Controller
{
    public $route;
    public $view;

    public function __construct($route)
    {
        $this->route = $route;
        $this->view = new View($this->route);
    }
}