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
require 'models/WatchModel.php';



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
require 'controllers/admin/DashboardController.php';
require 'controllers/admin/AdminLoginController.php';
require 'controllers/admin/AdminLogoutController.php';
require 'controllers/admin/AdminVideoController.php';
require 'controllers/admin/AdminUsersController.php';
require 'controllers/admin/VideoEditorController.php';
require 'controllers/admin/UserEditorController.php';


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

