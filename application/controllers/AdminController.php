<?php


namespace application\controllers;


use application\app\Controller;
use application\models\Movie;

class AdminController extends Controller
{
    public function actionIndex()
    {
        $this->view->render('Admin Panel');
    }

    public function actionMovie()
    {
        $movieModel = new Movie();
        $movies = $movieModel->getAllMovies();

        $arr = [
            'movies' => $movies
        ];

        $this->view->render('AdminPanel', $arr);
    }

    public function actionCreateMovie()
    {
        $arr = [
            'times' => Movie::SHOW_TIME,
        ];

        if (!empty($_POST)) {
            $movie = new Movie();
            $id = $movie->save($_POST);
            if (!empty($id) && $movie->uploadPoster($_FILES['poster']['tmp_name'], $id)) {
                $this->view->redirect('/admin/movie');
            } else {
                var_dump("Some wrong");
            }
        }

        $this->view->render('Create', $arr);
    }

    public function actionUpdateMovie()
    {
        if (!empty($_POST)) {
            $movie = new Movie();
            $movie->edit($_POST, $this->route['id']);
            if (!empty($_FILES)) {
                $movie->uploadPoster($_FILES['poster']['tmp_name'], $this->route['id']);
            }
            $this->view->redirect('/admin/movie');
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
    public function actionDeleteMovie()
    {
        $id = $this->route['id'];
        $movie = new Movie();

        $movie->delete($id);

        $this->view->redirect('/admin/movie');
    }
}