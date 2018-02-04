<?php

/*
     Web services - En este fichero podrán ser configurado los servicios principales de nuestra aplicación. 
     - https://www.github.com/oslboreal/sistemaEstacionamiento 
     - Vallejo Juan Marcos - 2018 - This code is open to te world, you can use, study, modify and redistribute it. 
*/

// Llamada a las bibliotecas necesarias. 
require_once '../vendor/autoload.php';
// Interfaces.
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

// Servicios. 
$app = new \Slim\App;

$app->get('/', function (Request $request, Response $response) {
    $response->getBody()->write("Bienvenido a el indice de Web services, consulte la documentación de la API.");
    return $response;
});

$app->run();

?>