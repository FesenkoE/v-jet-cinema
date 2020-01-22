<?php


namespace application\controllers;


use application\app\Controller;

class AdminController extends Controller
{
    public function actionIndex()
    {
        $this->view->render('Admin');
    }
}