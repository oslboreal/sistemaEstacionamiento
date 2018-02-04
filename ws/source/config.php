<?php

/* La clase config es aquella que es empleada para obtener las configuraciones del sistema desde la base de datos. */
require_once 'accesoDatos.php';
class Config 
{
    static public $costoHora;
    static public $costoMedia;
    static public $costoCompleta;
    static public $lugaresReservados;


    /* METODOS INTERNOS - HERRAMIENTAS */


    /* METODOS EXTERNOS - WS */

    public function Config()
    {
        // Método encargado de traer todos los datos de configuracion del sistema. 
        // Pega a la base de datos y carga los campos, que luego serán consultados para facturar o encontrar espacio.
    }

    public static function cargarDatos()
    {
        // Trae la información de configuración del estacionamiento de la base de datos.
    }

    public static function cantReservados()
    {
        // Consulta a la base de datos la cantidad de espacios reservados que hay. 
    }

    public static function cantPisos()
    {
        // Consulta a la base de datos la cantidad de pisos que hay
    }

    public static function cantCocheras()
    {
        // Consulta a la base de datos la cantidad de cocheras que hay
    }

    // Se le podría agregar. 
    // Modificar cada uno de los parámetros y actualizar llamando nuevamente a cargar datos. 
}

?>