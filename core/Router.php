<?php
namespace app\core;

class Router
{

    protected array $routes = [];

    public Request $request;

    public function __construct(Request $request){
        $this->request = $request;
    }

    public function get(string $path,  $callback)
    {

        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();

        $method = $this->request->method();

        $callback = $this->routes[$method][$path] ?? false;

        if ($callback === false){
            return "ROUTE NOT FOUND";

        }


        return call_user_func($callback);

    }

}