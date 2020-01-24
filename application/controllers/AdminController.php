<?php


namespace application\controllers;


use application\app\Controller;
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

    public function actionCreate()
    {
        $arr = [
            'times' => Movie::SHOW_TIME,
        ];

        if (!empty($_POST)) {
            $name = $_POST['name'];
            $showTime = $_POST['show_time'];

            $movie = new Movie($name, $showTime);
            $sql = ('INSERT INTO movies (name, show_time) VALUES (:name, :show_time)');
            if ($movie->save($sql)) {
                $this->view->redirect('/admin');
            };
        }

        $this->view->render('Create', $arr);
    }

    public function actionUpdate()
    {
        if (!empty($_POST)) {
            $movie = new Movie();
            $movie->edit($_POST, $this->route['id']);
            $this->view->redirect('/admin');
        }

        $id = $this->route['id'];
        $sql = 'SELECT * FROM movies WHERE id=' . $id;
        $model = $this->db->findOne($sql);

        $arr = [
            'model' => $model,
            'times' => Movie::SHOW_TIME
        ];

        $this->view->render('Update', $arr);
    }

    /**
     * remove movie
     */
    public function actionDelete()
    {
        $id = $this->route['id'];
        $movie = new Movie();

        $movie->delete($id);

        $this->view->redirect('/admin');
    }
}