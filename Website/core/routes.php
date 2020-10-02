<?php
$router->define([
    'GET' => [
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
            'controller' => 'CourseController',
            'method' => 'index'
        ],
        '/home' => [
            'controller' => 'HomeController',
            'method' => 'index'
        ],
        '/html_learn' => [
            'controller' => 'HtmllearnController',
            'method' => 'index'
        ],
        '/css_learn' => [
            'controller' => 'CsslearnController',
            'method' => 'index'
        ],
        '/html&css' => [
            'controller' => 'HtmlcsslearnController',
            'method' => 'index'
        ],
    ],
    'POST' => [
        '/login' => [
            'controller' => 'LoginController',
            'method' => 'login'
        ],
        '/register' => [
            'controller' => 'RegisterController',
            'method' => 'register'
        ],
    ]
]);

