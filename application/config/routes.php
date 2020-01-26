<?php

return [
    '' => [
        'controller' => 'main',
        'action' => 'index'
    ],

    'account/register' => [
        'controller' => 'account',
        'action' => 'register'
    ],

    'account/login' => [
        'controller' => 'account',
        'action' => 'login'
    ],

    'admin' => [
        'controller' => 'admin',
        'action' => 'index'
    ],

    'admin/movie' => [
        'controller' => 'admin',
        'action' => 'movie'
    ],

    'admin/movie/create' => [
        'controller' => 'admin',
        'action' => 'createMovie'
    ],

    'admin/movie/update/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'updateMovie',
    ],

    'admin/movie/delete/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'deleteMovie'
    ],

    'admin/session' => [
        'controller' => 'admin',
        'action' => 'session'
    ],

    'admin/session/create' => [
        'controller' => 'admin',
        'action' => 'createMovieSession'
    ],

    'admin/session/update/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'updateSession'
    ],

    'admin/session/delete/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'deleteSession'
    ],

];

