<?php

namespace app\core;
/**
 * @author A H M Tareq
 * @package app\core
 */
class Application
{

    public Router $router;

    public Request $request;

    public function __construct(){

        $this->request = new Request();
        $this->router = new Router($this->request);

    }

    public function run()
    {
        $this->router->resolve();
    }

}