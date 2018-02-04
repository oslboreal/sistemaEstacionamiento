<?php
/*
        Clase: Automovil.
        Esta clase posee la estructura de datos necesaria para instanciar un auto, este objeto será almacenado en 
        la base de datos dentro de los registros. 
        De modo que a la hora de consultar un registro se lo pueda asociar con un Automovil rápidamente sin tener
        que realizar una consulta en cualquier otra tabla. 
*/

include_once 'accesoDatos.php';

class Empleado
{
    /* CAMPOS. */
    public $id;
    public $usuario;
    public $password;
    public $estado;
    public $ultimoInicio;
    public $rol;

    public function Empleado($id, $usuario, $estado, $password, $ultimoInicio, $rol)
    {
        $this->id = $id;
        $this->usuario = $usuario;
        $this->estado = $estado;
        $this->password = $password;
        $this->ultimoInicio = $ultimoInicio;
    }

    /* ALTA - BAJA - MODIFICACION */

    public static function altaEmpleado()
    {
        // Agrega empleado a la base de datos. 
    }

    public static function bajaEmpleado()
    {
        // Elimina un empleado de la base de datos.
    }

    public static function modificarEmpleado()
    {
        // Modifica los datos de un empleado de la base de datos.
    }
}



?>