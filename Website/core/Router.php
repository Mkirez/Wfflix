<?php


class Router
{
    private $routes;

    public function __construct()
    {
        $this->routes = [];
    }

    // Dit zijn de routes
    public function define($routes)
    {
        $this->routes = $routes;
    }

    /**
     * Aan de hand van REQUEST_URI gaan we een bepaalde route afleggen
     * MAAR als de route er niet is dan ERROR
     */
    public function direct()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];

        $uri = explode("?", $uri)[0];

        if(isset(explode("/", $uri)[1])){
            if(explode("/", $uri)[1] == "admin"){
                if(!isset($_SESSION["ADMIN_USER"])){
                    if(isset(explode("/", $uri)[2])){
                        if(explode("/", $uri)[2] != "login") {
                            header("location:/admin/login");exit;
                        }
                    }else{
                        header("location:/admin/login");exit;
                    }
                }
            }
        }

        if (array_key_exists($uri, $this->routes[$method])) {
            $currentRoute = $this->routes[$method][$uri];
            $controller = new $currentRoute['controller']();
            $controller->{$currentRoute['method']}();
            return;
        }else{
            require "views/errors/404.view.php";
        }
    }
}



