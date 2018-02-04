<?php

/* La clase cochera se emplea para almacenar los Automoviles */
require_once 'accesoDatos.php';
class cochera
{
    /* CAMPOS */
    public $id;
    public $especial;

    public static function cocheraLibre($auto)
    {
        // Si el auto es especial, retorna un id de cochera reservada. 
        // Si el auto es común, retorna un id de cochera comun.
        // Si no hay espacio, retorna -1.
    }
}
?>