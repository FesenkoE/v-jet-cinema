<?php


namespace application\controllers;


use application\app\Controller;

class MovieController extends Controller
{
    public function actionIndex()
    {
        echo 'Movies page';
        debug($this->route);
    }
}