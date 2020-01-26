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
        $sql = "SELECT * FROM `session`
                LEFT JOIN movies on movies.id = session.movie_id 
                ORDER BY session.movie_date";

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
}