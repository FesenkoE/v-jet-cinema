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

    'admin/create' => [
        'controller' => 'admin',
        'action' => 'create'
    ],

    'admin/update/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'update',
    ],

    'admin/delete/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'delete'
    ]
];

