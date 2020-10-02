<?php
$router->define([
    '/' => [
        'controller' => 'HomeController',
        'method' => 'index'
    ],
    '/about' => [
        'controller' => 'AboutController',
        'method' => 'index'
    ],
    '/contact' => [
        'controller' => 'ContactController',
        'method' => 'index'
    ],
    '/login' => [
        'controller' => 'LoginController',
        'method' => 'index'
    ],
    '/register' => [
        'controller' => 'RegisterController',
        'method' => 'index'
    ],
    '/course' => [
        'controller' => 'courseController',
        'method' => 'index'
    ]
]);