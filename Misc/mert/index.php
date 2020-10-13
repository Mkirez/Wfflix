<?php
session_start();
/**
 * Models
 */

require "models/BaseModel.php";
require "models/UserModel.php";

/**
 * Controllers
 */
require 'controllers/HomeController.php';
require 'controllers/AboutController.php';
require 'controllers/ContactController.php';
require 'controllers/RegisterController.php';
require 'controllers/LoginController.php';
require 'controllers/AuthController.php';

require 'core/Router.php';

$router = new Router();
require 'core/routes.php';
$router->direct();

