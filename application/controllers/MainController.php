<?php

namespace application\controllers;

use application\app\Controller;
use application\lib\Db;

class MainController extends Controller
{
    public function actionIndex() {
        $movies = $this->model->getMovies();

        $vars = [
            'movies' => $movies
        ];

        $this->view->render('Main', $vars);
    }
}