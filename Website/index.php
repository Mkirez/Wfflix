<?php
<<<<<<< HEAD
require 'models/Basemodel.php';
require 'models/Usermodel.php';

=======
ini_set('display_errors', 1);
>>>>>>> b3acabce85ce6b7e8e53d53f27d41e11923395ec

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
require 'controllers/RegisterController.php';
require 'controllers/LoginController.php';

require 'core/Router.php';

$router = new Router();
require 'core/routes.php';
$router->direct();

