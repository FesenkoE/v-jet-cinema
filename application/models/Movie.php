<?php


namespace application\models;

use application\app\Model;
use application\lib\Db;

class Movie extends Model
{
    public $name;
    public $showTime;
    public $ticketsCount;
    public $pathImage;
    const SHOW_TIME = [
        '10:00:00',
        '12:00:00',
        '14:00:00',
        '16:00:00',
        '18:00:00',
        '20:00:00',
    ];

    public function __construct($name = null, $showTime = null)
    {
        parent::__construct();
        $this->name = $name;
        $this->showTime = $showTime;
    }

    /**
     * get all movies
     * @return array
     */
    public function getAllMovies() {
        $sql = 'SELECT * FROM movies';

        return $this->db->row($sql);
    }

    /**
     * add new movie
     * @param $sql
     * @return bool|\PDOStatement
     */
    public function add($sql) {
        $result = $this->db->query($sql, [
            'name' => $this->name,
            'show_time' => $this->showTime
        ]);

        return $result;
    }
}