<?php

// A class responsible for mapping requests to its controller.
class Router
{
    protected $routes = [];

    public static function load(array $routes)
    {
        $router = new static();
        $router->routes = $routes;

        return $router;
    }

    public function direct(string $uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        return 'views/404.php';
    }    
}