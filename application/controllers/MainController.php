<?php

namespace application\controllers;

use application\app\Controller;
use application\lib\Db;

class MainController extends Controller
{
    public function actionIndex() {
        $db = new Db;
        $params = [
            'id' => 2
        ];
        $result = $db->row('SELECT name FROM movie WHERE id = :id', $params);
        debug($result);

        $this->view->render('Main');
    }
}