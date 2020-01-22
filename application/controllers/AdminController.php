<?php


namespace application\controllers;


use application\app\Controller;
use application\lib\Db;
use application\models\Movie;

class AdminController extends Controller
{
    public function actionIndex()
    {
        $movieModel = new Movie();
        $movies = $movieModel->getAllMovies();

        $arr = [
          'movies' => $movies
        ];

        $this->view->render('AdminPanel', $arr);
    }

    public function actionCreate() {
        $arr = [
            'times' => Movie::SHOW_TIME,
        ];

        if (!empty($_POST)) {
            $name = $_POST['name'];
            $showTime = $_POST['show_time'];

            $movie = new Movie($name, $showTime);
            $sql = ('INSERT INTO movies (name, show_time) VALUES (:name, :show_time)');
            if ($movie->add($sql)) {
                header('location: /admin');
            };
        }

        $this->view->render('Create', $arr);
    }

    public function actionUpdate() {
        $arr = [
          'model' => '$this->model',
        ];

        $this->view->render('Update', $arr);
    }

    public function actionDelete() {
        header('Location: /admin');
    }
}