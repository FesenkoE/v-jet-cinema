<?php


namespace application\controllers;


use application\app\Controller;
use application\models\Movie;
use application\models\MovieSession;

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
            'times' => MovieSession::SHOW_TIME,
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
            'times' => MovieSession::SHOW_TIME
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

    /**
     * render view with all movie sessions
     */
    public function actionSession()
    {
        $model = new MovieSession();
        $movieSessions = $model->getAllMovieSession();

        $arr = [
            'movieSessions' => $movieSessions
        ];

        $this->view->render('Session', $arr);
    }

    /**
     * view for adding new movie session
     */
    public function actionCreateMovieSession()
    {
        if (!empty($_POST)) {
            $movieSession = new MovieSession();
            $id = $movieSession->save($_POST);
            if (!empty($id)) {
                $this->view->redirect('/admin/session');
            } else {
                var_dump("Some wrong");
            }
        }

        $modelMovies = new Movie();
        $allMovies = $modelMovies->getAllMoviesName();
        $movieTime = MovieSession::SHOW_TIME;

        $arr = [
            'allMovies' => $allMovies,
            'movieTime' => $movieTime
        ];

        $this->view->render('Add Movie Session', $arr);
    }

    /**
     * edit movie session
     */
    public function actionUpdateMovieSession()
    {
        if (!empty($_POST)) {
            $movie = new MovieSession();
            $movie->edit($_POST, $this->route['id']);
            $this->view->redirect('/admin/session');
        }

        $id = $this->route['id'];
        $sql = 'SELECT * FROM session WHERE id=' . $id;
        $model = $this->db->findOne($sql);
        $modelMovies = new Movie();
        $allMovies = $modelMovies->getAllMoviesName();

        $arr = [
            'model' => $model,
            'times' => MovieSession::SHOW_TIME,
            'allMovies' => $allMovies
        ];

        $this->view->render('Update Movie Session', $arr);
    }

    /**
     * delete movie session
     */
    public function actionDeleteMovieSession()
    {
        $id = $this->route['id'];
        $movie = new MovieSession();

        $movie->delete($id);

        $this->view->redirect('/admin/session');
    }
}