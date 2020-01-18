<?php

namespace application\controllers;

use application\app\Controller;

class MainController extends Controller
{
    public function actionIndex() {
        $vars = [
          'name' => 'Vasya',
          'age' => '88'
        ];
        $this->view->render('Main', $vars);
    }
}