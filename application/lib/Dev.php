<?php

//show errors
ini_set('display_errors', '1');
error_reporting(E_ALL);

/**
 * function for print request object
 * @param $model
 */
function debug($model)
{
    echo '<pre>';
    print_r($model);
    echo '</pre>';
}