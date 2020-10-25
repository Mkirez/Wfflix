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
        '/admin/login' => [
            'controller' => 'AdminAuthController',
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
        '/video' => [
            'controller' => 'CourseController',
            'method' => 'show'
        ],
        '/logout' => [
            'controller' => 'LogoutController',
            'method' => 'index'
        ],
        '/admin/logout' => [
            'controller' => 'AdminAuthController',
            'method' => 'logout'
        ],
        '/admin/dashboard' => [
            'controller' => 'DashboardController',
            'method' => 'index'
        ],
        '/admin/users' => [
            'controller' => 'AdminUsersController',
            'method' => 'index'
        ],
        '/admin/users/create' => [
            'controller' => 'AdminUsersController',
            'method' => 'create'
        ],
        '/admin/users/edit' => [
            'controller' => 'AdminUsersController',
            'method' => 'edit'
        ],
        '/admin/videos' => [
            'controller' => 'AdminVideoController',
            'method' => 'index'
        ],
        '/admin/video/create' => [
            'controller' => 'AdminVideoController',
            'method' => 'create'
        ],
        '/admin/video/edit' => [
            'controller' => 'AdminVideoController',
            'method' => 'edit'
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
        '/contact' => [
            'controller' => 'ContactController',
            'method' => 'Sendemail'
        ],
        '/admin/login' => [
            'controller' => 'AdminAuthController',
            'method' => 'login'
        ],
        '/admin/users/add' => [
            'controller' => 'AdminUsersController',
            'method' => 'AddUser'
        ],
        '/admin/users/edit' => [
            'controller' => 'AdminUsersController',
            'method' => 'editUser'
        ],
        '/admin/video/add' => [
            'controller' => 'AdminVideoController',
            'method' => 'AddVideo'
        ],
        '/admin/video/edit' => [
            'controller' => 'AdminVideoController',
            'method' => 'editVideo'
        ],
    ],
    'DELETE' => [
        '/admin/users/delete' => [
            'controller' => 'AdminUsersController',
            'method' => 'delete'
        ],
        '/admin/video/delete' => [
            'controller' => 'AdminVideoController',
            'method' => 'delete'
        ]
    ],
]);

