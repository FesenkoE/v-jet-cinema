<?php

require 'application/lib/autoload.php';
require 'application/lib/Dev.php';

use application\app\Router;

session_start();

$router = new Router;
$router->run();


