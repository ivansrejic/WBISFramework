<?php

namespace app\core;

class Request
{
    public function path()
    {
        $path = $_SERVER["REQUEST_URI"] ?? '/';
        $position = strpos($path,"?");

        if($position === false)
        {
            return $path;
        }

        return $path;
    }
    public function method()
    {
        return strtolower($_SERVER["REQUEST_METHOD"]); // Cita iz $_SERVER podatak request method, to je get,post,put ili delete i lowecaseuje ga
    }
    public function all() // funkcija za citanje svega iz requesta
    {
        return $_REQUEST;
    }

    public function one($parametarName) // za citanje jednog parametra iz requesta
    {
        return $_REQUEST[$parametarName] ?? null; // ovu informaciju moramo da var_dump , ne moze samo ecgo
        // ako je ovo prazno, vrati null
    }


}