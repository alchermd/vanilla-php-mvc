<?php

// A class responsible for mapping requests to its controller.
class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => [],
    ];

    public static function load(string $file)
    {
        $router = new static();
        require $file;

        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct(string $uri, string $method)
    {
        if (array_key_exists($uri, $this->routes[$method])) {
            return $this->callAction(...explode('@', $this->routes[$method][$uri]));
        }

        return 'views/404.php';
    }    

    protected function callAction($controller, $action)
    {
        $controller = new $controller;
        if (! method_exists($controller, $action)) {
            throw new Exception("{$controller} does not have {$action}");
        }

        return $controller->$action();
    }
}