<?php

namespace application\controllers;

use application\app\Controller;

class AccountController extends Controller
{
    public function actionLogin() {
        $this->view->render('Login');
    }

    public function actionRegister() {
        $this->view->render('Register');
    }
}