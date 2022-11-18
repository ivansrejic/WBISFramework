<?php
require_once __DIR__ . '/../vendor/autoload.php'; // __DIR__ je putanja gde se trenutno nalazimo

use app\core\Application;
use app\controllers\UserContoller;


$app = new Application();
//$app->router->test();
//$app->router->request->all();
//var_dump($app->router->request->path());
//var_dump($app->router->request->method());
$app->router->get("/home","home");
$app->router->get("/createPage","createPage");
$app->router->get("/index",[UserContoller::class,'index']);
$app->router->get("/create",[UserContoller::class,'Create']);
$app->router->get("/update",[UserContoller::class,'Update']);
$app->router->get("/delete",[UserContoller::class,'Delete']);
$app->router->get("/login",[UserContoller::class,'login']);
$app->router->get("/registration",[UserContoller::class,'registration']);
$app->router->post("/registrationProcess",[UserContoller::class,'registrationProcess']);

$app->run();

?>