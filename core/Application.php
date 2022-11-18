<?php
namespace app\core;

class Application
{
    public Router $router;
    public static Application $app;


    public function __construct()
    {
        $this->router = new Router();
        self::$app = $this;
    }

    public function run()
    {
        $this->router->resolve();
    }
}