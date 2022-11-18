<?php
namespace app\controllers;
use app\core\Controller;
use app\core\Router;
use app\models\RegistrationModel;
use mysqli;

class UserContoller extends Controller
{

    public function __construct()
    {
        $this->router = new Router();
    }

    public function login()
    {
        return $this->view("login","auth");
    }

    public function registration()
    {
        return $this->view("registration","auth");
    }

    public function registrationProcess()
    {

        $mysql = new mysqli("localhost","root","","novabaza") or die();

        $registration = new RegistrationModel();
        $registration->mapData($this->router->request->all()); // ovo all vraca ceo request, a mapData, mapira iz requesta u propertije, email i password
        //Ova linija iznad, menja ove dve donje linije.
        //$registration->email = $this->router->request->one("email");
        //$registration->password = $this->router->request->one("password");
        //var_dump($registration);




        $mysql -> query("INSERT INTO users (email , password) VALUES ('$registration->email',' $registration->password')") or die("Error");

        echo "Uspesna registracija";

    }

}