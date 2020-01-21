<?php

namespace application\controllers;

use application\app\Controller;

class AccountController extends Controller
{
    public function actionLogin() {
        if (!empty($_POST)) {
            exit(json_encode(['status' => 'success', 'message' => 123]));
        }
        $this->view->render('Login');
    }

    public function actionRegister() {
        $this->view->render('Register');
    }
}