<?php

/*
     Web services - En este fichero podrán ser configurado los servicios principales de nuestra aplicación. 
     - https://www.github.com/oslboreal/sistemaEstacionamiento 
     - Vallejo Juan Marcos - 2018 - This code is open to te world, you can use, study, modify and redistribute it. 
*/

// Llamada a las bibliotecas necesarias. 
require_once '../vendor/autoload.php';
require_once 'libs.php';
// Interfaces.
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

// Servicios. 
$app = new \Slim\App;

// Esto es un método externo, luego deberá ser llamado en un grupo
$app->get('/', function (Request $request, Response $response) {
    //$empleado = new Empleado("2", 'Test', true, 'clave', date("Y-m-d H:i:s"), 'admin'); 
    //$empleado->borrarEmpleado();
    var_dump(Empleado::traerEmpleados());
    return $ultimoId;
});

//$app->group('/empleados', function () {
 
  //$this->get('/', \cdApi::class . ':traerTodos')->add(\MWparaCORS::class . ':HabilitarCORSTodos');
 
  //$this->get('/{id}', \cdApi::class . ':traerUno')->add(\MWparaCORS::class . ':HabilitarCORSTodos');

  //$this->post('/', \cdApi::class . ':CargarUno');

  //$this->delete('/', \cdApi::class . ':BorrarUno');

  //$this->put('/', \cdApi::class . ':ModificarUno');
     
//})->add(\MWparaAutentificar::class . ':VerificarUsuario')->add(\MWparaCORS::class . ':HabilitarCORS8080');


$app->run();
?>