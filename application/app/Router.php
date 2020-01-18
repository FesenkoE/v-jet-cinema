<?php

namespace application\app;

class Router
{
    protected $routes = [];
    protected $params = [];

    /**
     * include routes
     * Router constructor.
     */
    function __construct()
    {
        $arr = require 'application/config/routes.php';
        foreach ($arr as $key => $val) {
            $this->add($key, $val);
        }
    }

    /**
     * concat regular expression to routes
     * @param $route
     * @param $params
     */
    public function add($route, $params)
    {
        $route = '#^' . $route . '$#';
        $this->routes[$route] = $params;
    }

    /**
     * match on exists route
     * @return bool
     */
    public function match()
    {
        $url = trim($_SERVER['REQUEST_URI'], '/');

        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                $this->params = $params;
                return true;
            }
        }

        return false;
    }

    /**
     * initial action method
     */
    public function run()
    {
        if ($this->match()) {
            $path = 'application\controllers\\' . ucfirst($this->params['controller']) . 'Controller';

            if (class_exists($path)) {
                $action = 'action' . ucfirst($this->params['action']);

                if (method_exists($path, $action)) {
                    $controller = new $path($this->params);
                    $controller->$action();
                } else {
                    echo 'method ' . $action . ' is not defined';
                }
            } else {
                echo $path . ' is not found';
            }
        } else {
            echo 'Route is not found';
        }

    }
}
