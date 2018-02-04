<?php
/*
        Clase: Automovil.
        Esta clase posee la estructura de datos necesaria para instanciar un auto, este objeto será almacenado en 
        la base de datos dentro de los registros. 
        De modo que a la hora de consultar un registro se lo pueda asociar con un Automovil rápidamente sin tener
        que realizar una consulta en cualquier otra tabla. 
*/

class Empleado

{
    /* CAMPOS. */
    public $id;
    public $usuario;
    public $password;
    public $estado;

    public function Automovil($pat, $col, $mar)
    {
        $this->patente = $patente;
        $this->color = $col;
        $this->marca = $mar;
    }
}



?>