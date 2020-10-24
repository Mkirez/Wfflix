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
        '/video' => [
            'controller' => 'CourseController',
            'method' => 'show'
        ],
        '/html_learn' => [
            'controller' => 'HtmllearnController',// courses pagina(html video )
            'method' => 'index'
        ],
        '/css_learn' => [
            'controller' => 'CsslearnController',// courses pagina(css learn video)
            'method' => 'index'
        ],
        '/html&css' => [
            'controller' => 'HtmlcsslearnController',// courses pagina(html en css full course)
            'method' => 'index'
        ],
        '/phpintro' => [
            'controller' => 'PhpintroController',// courses pagina(php intro video )
            'method' => 'index'
        ],
        '/phpsyntax' => [
            'controller' => 'PhpsyntaxController',// courses pagina(php syntax video )
            'method' => 'index'
        ],
         '/phpinclude' => [
            'controller' => 'PhpincludeController',// courses pagina(php syntax video )
            'method' => 'index'
        ],
        '/jsfundamentals' => [
            'controller' => 'JsfundamentalsController',// courses pagina(php syntax video )
            'method' => 'index'
        ],
        '/jsvariables' => [
            'controller' => 'JsvariablesController',// courses pagina(php syntax video )
            'method' => 'index'
        ],
        '/jsdatatypes' => [
            'controller' => 'JsdatatypesController',// courses pagina(php syntax video )
            'method' => 'index'
        ],
        '/logout' => [
            'controller' => 'LogoutController',
            'method' => 'index'
        ],
        '/users' => [
            'controller' => 'AdminUsersController',
            'method' => 'index'
        ],
        '/dashboard' => [
            'controller' => 'DashboardController',
            'method' => 'index'
        ],
        '/adminvideo' => [
            'controller' => 'AdminVideoController',
            'method' => 'index'
        ],
        '/adminusers/edit' => [
            'controller' => 'UserEditorController',
            'method' => 'index'
        ],
        '/adminvideo/edit' => [
            'controller' => 'VideoEditorController',
            'method' => 'index'
        ],
        '/adminvideo/create' => [
            'controller' => 'AdminVideoController',
            'method' => 'create'
        ],
        '/adminusers/create' => [
            'controller' => 'AdminUsersController',
            'method' => 'create'
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
        '/admineditusers/edit' => [
            'controller' => 'UserEditorController',
            'method' => 'editUser'
        ],
        '/admineditproducts/edit' => [
            'controller' => 'VideoEditorController',
            'method' => 'editProduct'
        ],
        '/adminusers/add' => [
            'controller' => 'AdminUsersController',
            'method' => 'AddUser'
        ],
        '/adminvideo/add' => [
            'controller' => 'AdminVideoController',
            'method' => 'AddVideo'
        ],
    ],
    'DELETE' => [
        '/adminusers/delete' => [
            'controller' => 'AdminUsersController',
            'method' => 'delete'
        ],
        '/adminvideo/delete' => [
            'controller' => 'AdminVideoController',
            'method' => 'delete'
        ]
    ],
    'UPDATE' => [
    '/adminusers/edit' => [
    'controller' => 'UserEditorController',
    'method' => 'editUser'
        ],
        '/adminvideo/edit' => [
    'controller' => 'VideoEditorController',
    'method' => 'editVideo'
        ],
    ],
]);

