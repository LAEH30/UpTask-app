<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\Logincontroller;
use MVC\Router;
$router = new Router();

// Login
$router->get('/', [Logincontroller::class, 'login']);
$router->post('/', [Logincontroller::class, 'login']);

//Crear cuenta
$router->get('/create', [Logincontroller::class, 'create']);
$router->post('/create', [Logincontroller::class, 'create']);

//enviar instrucciones
$router->get('/reset', [Logincontroller::class, 'reset']);
$router->post('/reset', [Logincontroller::class, 'reset']);

//restablecer password
$router->get('/restablecer', [Logincontroller::class, 'restablecer']);
$router->post('/restablecer', [Logincontroller::class, 'restablecer']);

//confirmar 
$router->get('/mensaje', [Logincontroller::class, 'mensaje']);
$router->get('/confirmar', [Logincontroller::class, 'confirmar']);




// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();