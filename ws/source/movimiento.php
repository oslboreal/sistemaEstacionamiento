<?php 

/* Esta clase define que es un log, se empleará para registrar los movimientos mediante un middleware.*/

class Movimiento
{
    public $id;
    public $idUsuario;
    public $date; 
    public $mensaje;

    public static function registrarMovimiento($idUsuario, $mensaje)
    {

    }
}
?>