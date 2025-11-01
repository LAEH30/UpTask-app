<?php

namespace Controllers;
use MVC\Router;


class Logincontroller {
    public static function login(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){

        }
        // Render a la vista
        $router->render('auth/login',[
            'titulo' => 'Iniciar Sesión'
        ]);
    }
    public static function create(Router $router)
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        }
        $router->render('auth/create', [
            'titulo' => 'Crear Cuenta'
        ]);
    }
    public static function reset(Router $router){

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
        }
        $router->render('auth/reset', [
            'titulo' => 'Restablecer Password'
        ]);
    }
    public static function mensaje(){
        echo "Desde mensaje";
    }
    public static function confirmar(){
        echo "Desde confirmar";
    }
} 