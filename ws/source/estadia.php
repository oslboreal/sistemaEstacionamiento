<?php

/* Esta clase es empleada para calcular el tiempo que un vehiculo lleva estacionado */
require_once 'accesoDatos.php';
class Estadia
{
    /* CAMPOS */
    public $cantidadHoras;
    public $costoHora;
    public $costoMedia;
    public $costoCompleta;


    /* METODOS INTERNOS - HERRAMIENTAS */


    /* METODOS EXTERNOS - WS */
    public static function calcularCostos()
    {
        // En función de la cantidad de horas y los diferentes costos que se obtienen de la base de datos
        //calcula el total y lo retorna
    }

    public static function obtenerCostos()
    {
        // Obtiene los tres distintos tipos de costos y los carga en las variables costoHora, costoMedia y costoCompleta
        // Esos datos serán utilizados para calcular los costos
    }
}