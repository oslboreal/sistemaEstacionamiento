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


    /* METODOS INTERNOS - HERRAMIENTAS */
    public static function altaEmpleado($empleado)
    {
        // Recibe un empleado y lo carga en la base de datos.
    }

    public function bajaEmpleado()
    {
        // Este método desprecia cualquier campo que no sea el ID. 
        // Básicamente realiza una baja del Empleado que tenga el id ingresado. 
    }

    public function borrarEmpleado()
    {
        // Este método desprecia cualquier campo que no sea el ID. 
        // Básicamente borra el registro en la base de datos que tenga el id ingresado. 
    }

    public function modificarEmpleado()
    {
        // Este método busca en la base de datos el empleado que tenga el id ingresado
        // Y reemplaza todos sus campos por los cargados actualmente en la instancia. 
    }

    public static function traerEmpleados()
    {
        // Trae una lista de los empleados, la misma luego podrá ser filtrada en los métodos externos.
    }

    public static function traerEmpleadoId()
    {
        // Este método utiliza el método traerEmpleados() y luego lo filtra.
    }

    /* METODOS EXTERNOS - WS */

}



?>