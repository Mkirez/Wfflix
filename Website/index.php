<?php

//Exclude File extensions from routes
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|min.js|js|svg)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}

ini_set('display_errors', 1);


session_start();

/**
 * Config ( Base )
 */
require "core/config.php";

/**
 * Models
 */
require 'models/BaseModel.php';
require 'models/UserModel.php';



/**
 * Controllers
 */
require 'controllers/HomeController.php';
require 'controllers/AboutController.php';
require 'controllers/ContactController.php';
require 'controllers/CourseController.php';
require 'controllers/RegisterController.php';
require 'controllers/LoginController.php';
require 'controllers/HtmllearnController.php';
require 'controllers/CsslearnController.php';
require 'controllers/HtmlcsslearnController.php';



require 'core/Router.php';

$router = new Router();
require 'core/routes.php';
$router->direct();


