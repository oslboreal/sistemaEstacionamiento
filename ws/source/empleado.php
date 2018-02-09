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

    /* METODOS INTERNOS - HERRAMIENTAS */
    public function altaEmpleado()
    {
        // Recibe un empleado y lo carga en la base de datos.
        try
        {
            $datos = AccesoDatos::dameUnObjetoAcceso();
            $consulta =$datos->RetornarConsulta("INSERT into empleados (usuario, estado, pass, ultimoinicio, rol)".
            "values('$this->usuario','$this->estado', '$this->password' , '$this->ultimoInicio', '$this->rol')");
            $consulta->execute();
            return $datos->RetornarUltimoIdInsertado();
        }catch(Exception $e)
        {
            echo 'Excepción capturada - Error guardando datos del empleado: ',  $e->getMessage(), "\n";
        }    
    }

    public function borrarEmpleado()
    {
        // Este método desprecia cualquier campo que no sea el ID. 
        // Básicamente borra el registro en la base de datos que tenga el id ingresado. 
        try
        {
            $datos = AccesoDatos::dameUnObjetoAcceso();
            $consulta =$datos->RetornarConsulta("DELETE from empleados WHERE id = 2");
            $consulta->execute();
            return true;
        }catch(Exception $e)
        {
            echo 'Excepción capturada - Error borrando el empleado: ',  $e->getMessage(), "\n";
        }
    }

    public function modificarEmpleado()
    {
        // Este método busca en la base de datos el empleado que tenga el id ingresado
        // Y reemplaza todos sus campos por los cargados actualmente en la instancia. 
       // usuario, estado, pass, ultimoinicio, rol
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
        $consulta =$objetoAccesoDato->RetornarConsulta("
            update empleados 
            set usuario='$this->usuario',
            estado='$this->estado',
            pass='$this->password',
            ultimoinicio='$this->ultimoInicio',
            rol='$this->rol'
            WHERE id='$this->id'");
        return $consulta->execute();
    }

    public function bajaEmpleado()
    {
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
        $consulta =$objetoAccesoDato->RetornarConsulta("
            update empleados 
            set estado='$this->usuario',
            WHERE id='$this->id'");
        return $consulta->execute();
    }

    public static function traerEmpleados()
    {
        // Trae una lista de los empleados, la misma luego podrá ser filtrada en los métodos externos.
        $objetoAcceso = AccesoDatos::dameUnObjetoAcceso();
        $consulta = $objetoAcceso->RetornarConsulta("SELECT * FROM empleados");
        $consulta->execute();
        // Almaceno el arreglo con los registros obtenidos.
        return $consulta->fetchAll(PDO::FETCH_CLASS,"Empleado");
    }

    public static function traerEmpleadoId()
    {
        // Este método utiliza el método traerEmpleados() y luego lo filtra.
    }

    /* METODOS EXTERNOS - WS */

    public function ModificarUno($request, $response, $args) {
        //$response->getBody()->write("<h1>Modificar  uno</h1>");
        $ArrayDeParametros = $request->getParsedBody();
       //var_dump($ArrayDeParametros);    	
       $micd = new cd();
       $micd->id=$ArrayDeParametros['id'];
       $micd->titulo=$ArrayDeParametros['titulo'];
       $micd->cantante=$ArrayDeParametros['cantante'];
       $micd->año=$ArrayDeParametros['anio'];

          $resultado =$micd->ModificarCdParametros();
          $objDelaRespuesta= new stdclass();
       //var_dump($resultado);
       $objDelaRespuesta->resultado=$resultado;
       return $response->withJson($objDelaRespuesta, 200);		
   }

}



?>