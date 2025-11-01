<?php

namespace Controllers;

use MVC\Router;


class Logincontroller
{
    public static function login(Router $router)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        }
        // Render a la vista
        $router->render('auth/login', [
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
    public static function reset(Router $router)
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        }
        $router->render('auth/reset', [
            'titulo' => 'Restablecer Password'
        ]);
    }
    public static function restablecer(Router $router)
    {

        $router->render('auth/restablecer', [
            'titulo' => 'restablecer password'
        ]);
    }
    public static function mensaje(Router $router)
    {

        $router->render('auth/mensaje', [
            'titulo' => 'Cuenta creada Exitosamente'
        ]);
    }
    public static function confirmar(Router $router)
    {
        $router->render('auth/confirmar', [
            'titulo' => 'Confirma tu cuenta UpTask'
        ]);
    }
}
