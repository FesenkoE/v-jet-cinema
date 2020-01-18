<?php


namespace application\app;


abstract class View
{
    public $patch;
    public $layout = 'default';

    public function __construct()
    {
        echo 'this is view';
    }
}