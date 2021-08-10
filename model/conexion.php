<?php



define('NOMBRE_SERVER',"localhost");
define('NOMBRE_USUARIO',"root");
define('CLAVE',"");
define('NOMBRE_BD',"ventas2");
// indicamos que trabajaremos con variables de sesion

// iniciar a trabajar con PHP Orientado a Objetos
// se crea una clase para el metodo de conexion


class Conexion {
    //put your code here
    private $server;
    private $usuario;
    private $clave;
    private $BD;
    private $conexion;

    public function __construct()
    {
      
    }
    public function conectarBD()
    {
       $this->server=NOMBRE_SERVER;
       $this->usuario=NOMBRE_USUARIO;
       $this->clave=CLAVE;
       $this->BD=NOMBRE_BD;

        $this->conexion=new mysqli($this->server,$this->usuario,$this->clave,$this->BD);
       

    }
    // Es unsado
    public function setEjecutarSQL($sql)
    {
        return $this->conexion->query($sql);
    }

    public function getEjecutarSQL($sql)
    {
        return $this->conexion->query($sql);
    }

}
