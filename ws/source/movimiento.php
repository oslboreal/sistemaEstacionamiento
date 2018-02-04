<?php 

/* Esta clase define que es un log, se empleará para registrar los movimientos mediante un middleware.*/
require_once 'accesoDatos.php';
class Movimiento
{
    public $id;
    public $idUsuario;
    public $date; 
    public $mensaje;

    /* METODOS INTERNOS - HERRAMIENTAS */


    /* METODOS EXTERNOS - WS */
    public static function registrarMovimiento($idUsuario, $mensaje)
    {

    }
}
?>