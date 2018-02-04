<?php

/* Clase registro, se empleará para registrar el ingreso o la salida de un vehiculo. */

class Registro
{
    /* CAMPOS */
    public $id;
    // Datos del auto almacenado. || De esta manera evitamos crear una TABLA para autos.
    public $patente; // Patente del auto almacenado
    public $color;
    public $marca;
    public $especial;
    ///// 
    public $dateIngreso;
    public $ususarioIngreso;
    public $dateSalida;
    public $usuarioSalida;
    public $costoFinal;
    public $estado; // Pendiente (El auto aún no cerró la cuenta) || Finalizado.. (Se calcula el costo final.)

    /* METODOS PRINCIPALES */
    public static function estacionarVehiculo()
    {

    }

    public static function facturarVehiculo()
    {
        // Unicamente funcionará para vehiculos que se encuentren estacionados. 
        // Busca un vehiculo con su dominio y calcula el costo. 
        // Cambia el estado del registro correspondiente a Finalizado. 
    }

    /* HERRAMIENTAS */
    public static function isParked()
    {
        // Retorna true si un vehiculo está estacionado, caso contrario false. 
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

    public static function calcularCostoEstadia()
    {
        // Utiliza la clase Estadia y sus métodos para calcular el costo. 
        // Aquí se pasara el tiempo que el vehiculo lleva, los costos son obtenidos de la base de datos.
    }
}

?>