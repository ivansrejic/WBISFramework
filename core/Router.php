<?php
namespace app\core;


class Router
{
    public array $routes = [];
    public Request $request;

    public function __construct()
    {
        $this->request = new Request();
    }
    public function get($path,$callback) // dodajemo u niz, sta ce da se desi kad npr ./home otkucamo u URL, gde ce da ode
    {
        $this->routes['get'][$path] = $callback;
    }
    public function post($path,$callback)
    {
        $this->routes['post'][$path] = $callback;
    }
    public function resolve()
    {
        $path = $this->request->path();
        $method = $this->request->method();

        $callback = $this->routes[$method][$path] ?? false;

        if($callback === false)
        {
            http_response_code(404);
            echo $this->partialView("notFound");
        }
        if(is_string($callback))
        {
            echo $this->partialView($callback);
        }
        if(is_array($callback))
        {
            $callback[0] = new $callback [0](); //Ovo ustvari instancira classu, koja se nalazi na niz[0] poziciji. UserController::Class vraca ./blabla/UserController npr
        }
        return call_user_func($callback); //call_user_funkcion je fja koja prima niz elemenata u kome ce ona da pokrene fju koja se nalazi u drugom elementu [class-aNeka, fja];
    }

    public function partialView($viewName)
    {
        ob_start(); //otvara buffer
        include_once __DIR__ . "/../views/$viewName.php";
        return ob_get_clean(); //zatvara buffer
    }

    public function layout($layout) //fja koja poziva layout
    {
        ob_start();
        include_once __DIR__ . "/../views/layouts/$layout.php";
        return ob_get_clean(); // vraca sve iz buffera u odredjenu promenljivu.
    }
    public function view($viewName, $layout)
    {
        $layoutContent = $this->layout($layout);
        $partialViewContent = $this->partialView($viewName);

        $view = str_replace("{{ renderPartialView }}", $partialViewContent,$layoutContent); //trazi string u arg3, menja sa arg2,
        echo $view;
    }
}