<?php


namespace application\models;

use application\app\Model;

class Movie extends Model
{
    /**
     * get all movies
     * @return bool|\PDOStatement
     */
    public function getAllMovies()
    {
        return $this->db->query('SELECT * FROM movies');
    }

    /**
     * add new movie
     * @param $post
     * @return bool|\PDOStatement
     */
    public function save($post)
    {
        $params = [
            'name' => $post['name'],
            'description' => $post['description']
        ];

        $this->db->query('INSERT INTO movies (name, description) VALUES (:name, :description)', $params);
        return $this->db->getLastInsertId();
    }

    /**
     * edit existing movie
     * @param $post
     * @param $id
     * @return mixed
     */
    public function edit($post, $id)
    {
        $params = [
            'id' => $id,
            'name' => $post['name'],
            'description' => $post['description']
        ];

        $this->db->query('UPDATE movies SET name = :name, description = :description WHERE id = :id', $params);
        return $id;
    }

    /**
     * removing existing film
     * @param $id
     */
    public function delete($id)
    {
        $params = [
            'id' => $id,
        ];

        $this->db->query('DELETE FROM movies WHERE id = :id', $params);
        unlink('public/images/posters/' . $id . '.jpg');
    }

    /**
     * upload poster for movie
     * @param $path
     * @param $id
     * @return bool
     */
    public function uploadPoster($path, $id)
    {
        return move_uploaded_file($path, 'public/images/posters/' . $id . '.jpg');
    }
}