<?php 

/* Esta clase define que es un log, se empleará para registrar los movimientos mediante un middleware.*/
require_once 'accesoDatos.php';
class Movimiento
{
    public $id;
    public $idUsuario;
    public $date; 
    public $mensaje;

    // Método middleware, ver bien donde va.
    public static function registrarMovimiento($idUsuario, $mensaje)
    {

    }
}
?>