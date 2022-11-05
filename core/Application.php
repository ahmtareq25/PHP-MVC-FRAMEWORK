<?php

namespace app\core;
/**
 * @author A H M Tareq
 * @package app\core
 */
class Application
{

    const PROJECT_DIR = __DIR__."/../";

    public Router $router;

    public Request $request;

    public Response $response;

    public static Application $app;

    public function __construct(){

        self::$app = $this;
        $this->request = new Request();
        $this->router = new Router();
        $this->response = new Response();

    }

    public function run()
    {
        echo $this->router->resolve();
    }

}