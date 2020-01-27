<?php


namespace application\models;


use application\app\Model;
use PDO;

class MovieSession extends Model
{
    const SHOW_TIME = [
        '10:00:00',
        '12:00:00',
        '14:00:00',
        '16:00:00',
        '18:00:00',
        '20:00:00',
    ];

    /**
     * get all movie session
     * @return array
     */
    public function getAllMovieSession()
    {
        $sql = "SELECT s.id, s.movie_id, s.movie_date, s.movie_time, s.tickets_sale, s.tickets_sold, m.name FROM `session` as s
                LEFT JOIN movies as m on m.id = s.movie_id 
                ORDER BY s.movie_date";

        $result = $this->db->query($sql);

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function save($post)
    {
        $params = [
            'movie_id' => $post['movie_id'],
            'movie_date' => $post['movie_date'],
            'movie_time' => $post['movie_time']
        ];

        $this->db->query('INSERT INTO session (movie_id, movie_date, movie_time) 
                               VALUES (:movie_id, :movie_date, :movie_time)', $params);

        return $this->db->getLastInsertId();
    }

    /**
     * edit existing movie session
     * @param $post
     * @param $id
     * @return mixed
     */
    public function edit($post, $id)
    {
        $params = [
            'id' => $id,
            'movie_id' => $post['movie_id'],
            'movie_date' => $post['movie_date'],
            'movie_time' => $post['movie_time'],
        ];

        $this->db->query('UPDATE session SET movie_id = :movie_id, movie_date = :movie_date, movie_time = :movie_time WHERE id = :id', $params);

        return $id;
    }

    /**
     * delete movie session
     * @param $id
     */
    public function delete($id)
    {
        $params = [
            'id' => $id,
        ];

        $this->db->query('DELETE FROM session WHERE id = :id', $params);
    }
}