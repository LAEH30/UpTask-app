<?php

namespace Controllers;
use MVC\Router;


class Logincontroller {
    public static function login(Router $router){
        $mensaje = "hola mundo";
        if($_SERVER['REQUEST_METHOD'] === 'POST'){

        }
        // Render a la vista
        $router->render('auth/login',[
            'titulo' => 'Iniciar Sesión',
            'mensaje' => $mensaje
        ]);
    }
    public static function create(){
        echo "Desde create";

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

        }
    }
    public static function reset(){
        echo "Desde reset";

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

        }
    }
    public static function mensaje(){
        echo "Desde mensaje";
    }
    public static function confirmar(){
        echo "Desde confirmar";
    }
} 