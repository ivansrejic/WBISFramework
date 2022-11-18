<?php

namespace app\core;


abstract class Controller
{
    public Router $router;
    public Request $request;

    public function __construct()
    {
        $this->router = new Router();
    }
    public function view($view,$layout) // ovde smo napravili ovu klasu, da bi u UserController pozvali samo view, a ne this-router-view
    {
        return $this->router->view($view,$layout);
    }

}