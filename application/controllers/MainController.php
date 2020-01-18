<?php

namespace application\controllers;

use application\app\Controller;

class MainController extends Controller
{
    public function actionIndex() {
        echo 'Main page';
        debug($this->route);
    }
}