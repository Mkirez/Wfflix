<?php


class Router
{
    private $routes;

    public function __construct()
    {
        $this->routes = [];
    }

    //dit zijn de router
    public function define($routes)
    {
        $this->routes = $routes;
    }

    /** 
     * Aan de hand van REQUEST_URI gaan we een bepaalde route afleggen 
     * Maar ald de route er niet is dan ERROR 
    */
    public function direct()
    {
        $uri = $_SERVER['REQUEST_URI'];
    
        if(array_key_exists($uri, $this->routes)){
            $currentRoute = $this->routes[$uri];
            $controller = new $currentRoute['controller']();
            $contorller ->{$currentRoute['method']}();
            return;
        }
    
        throw new Exception( message: 'Route not defined!');
    }
}
