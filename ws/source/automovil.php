<?php
/*
        Clase: Automovil.
        Esta clase posee la estructura de datos necesaria para instanciar un auto, este objeto será almacenado en 
        la base de datos dentro de los registros. 
        De modo que a la hora de consultar un registro se lo pueda asociar con un Automovil rápidamente sin tener
        que realizar una consulta en cualquier otra tabla. 
*/
require_once 'accesoDatos.php';
class Automovil
{
    /* CAMPOS. */
    public $patente;
    public $color;
    public $marca;
    public $especial; // Si es especial se le brindará un lugar reservado.
    // Un automovil será instanciado con los datos a la hora de crear un nuevo registro.
    // Los datos del automovil serán serializados en un JSON en el campo "vehiculo" del registro. 
    public function Automovil($pat, $col, $mar)
    {
        $this->patente = $patente;
        $this->color = $col;
        $this->marca = $mar;
    }

    /* METODOS INTERNOS */


    /* METODOS EXTERNOS - WS */
}
?>