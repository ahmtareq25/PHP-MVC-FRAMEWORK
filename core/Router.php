<?php
namespace app\core;

class Router
{

    protected array $routes = [];

    public Request $request;

    public function __construct(Request $request){
        $this->request = $request;
    }

    public function get(string $path, \Closure $callback)
    {

        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();


        $method = $this->request->method();

        $callback = $this->routes[$method][$path] ?? false;

        if ($callback === false){
            echo "ROUTE NOT FOUND";
            exit;
        }

        echo call_user_func($callback);

    }
}