<?php

namespace application\controllers;

use application\app\Controller;

class AccountController extends Controller
{
    public function actionLogin() {
        echo 'Login page';
        debug($this->route);
    }

    public function actionRegister() {
        echo 'Register page';
    }
}