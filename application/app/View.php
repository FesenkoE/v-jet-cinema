<?php


namespace application\app;


class View
{
    public $path;
    public $route;
    public $layout = 'default';

    public function __construct($route)
    {
        $this->route = $route;
        $this->path = $route['controller'] . '/' . $route['action'];
    }

    /**
     * vars are rendering to page
     * @param $title
     * @param array $vars
     */
    public function render($title, $vars = [])
    {
        //convert to the same variables
        extract($vars);
        $path = 'application/views/' . $this->path . '.php';

        if (file_exists($path)) {
            ob_start();
            require 'application/views/' . $this->path . '.php';
            $content = ob_get_clean();
            require 'application/views/layouts/' . $this->layout . '.php';
        } else {
            echo 'View is not found' . $this->path;
        }
    }

    /**
     * redirect to pointed page
     * @param $url
     */
    public function redirect($url)
    {
        header('location: ' . $url);
        exit;
    }

    /**
     * require not exists page
     * @param $code
     */
    public static function errorCode($code)
    {
        http_response_code($code);
        $path = 'application/views/errors/' . $code . '.php';

        if (file_exists($path)) {
            require 'application/views/errors/' . $code . '.php';
        }

        exit;
    }
}