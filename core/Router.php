<?php
namespace app\core;

class Router
{

    protected array $routes = [];

    public function get(string $path,  $callback)
    {

        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $path = app()->request->getPath();

        $method = app()->request->method();

        $callback = $this->routes[$method][$path] ?? false;

        if ($callback === false){
            app()->response->setResponseCode(404);
            return "ROUTE NOT FOUND";

        }

        return call_user_func($callback);

    }

}