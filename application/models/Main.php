<?php

namespace application\models;

use application\app\Model;

class Main extends Model
{
    /**
     * get all movies;
     * @return array
     */
    public function getMovies() {
        $query = 'SELECT * FROM movies';

        return $this->db->findAll($query);
    }
}