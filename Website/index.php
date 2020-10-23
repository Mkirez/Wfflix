<?php
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
require 'models/videoModel.php';




/**
 * Controllers
 */
require 'controllers/HomeController.php';
require 'controllers/AboutController.php';
require 'controllers/ContactController.php';
require 'controllers/RegisterController.php';
require 'controllers/LoginController.php';
require 'controllers/LogoutController.php';
require 'controllers/CourseController.php';
require 'controllers/DashboardController.php';
require 'controllers/AdminLoginController.php';
require 'controllers/AdminLogoutController.php';
require 'controllers/AdminVideoController.php';
require 'controllers/AdminUsersController.php';
require 'controllers/VideoEditorController.php';
require 'controllers/UserEditorController.php';


//html video pages
require 'controllers/HtmllearnController.php';
require 'controllers/CsslearnController.php';
require 'controllers/HtmlcsslearnController.php';

//php videos pages
require 'controllers/PhpintroController.php';
require 'controllers/PhpsyntaxController.php';
require 'controllers/PhpincludeController.php';

//js video pages
require 'controllers/JsfundamentalsController.php';
require 'controllers/JsvariablesController.php';
require 'controllers/JsdatatypesController.php';





require 'core/Router.php';

$router = new Router();
require 'core/routes.php';
$router->direct();

