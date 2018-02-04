<?php

/* La clase config es aquella que es empleada para obtener las configuraciones del sistema desde la base de datos. */

class Config 
{
    static public $costoHora;
    static public $costoMedia;
    static public $costoCompleta;
    static public $lugaresReservados;

    public function Config()
    {
        // Método encargado de traer todos los datos de configuracion del sistema. 
        // Pega a la base de datos y carga los campos, que luego serán consultados para facturar o encontrar espacio.
    }
}

?>