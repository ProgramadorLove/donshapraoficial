<?php

require_once ("conexion.php");

class modelocliente extends Conexion {
    private $nombre;
    private $apellido;
    private $dni;
    private $sexo;
    private $celular;
    private $correo;
    
    public function buscardatosCliente(){
        $sql="SELECT *FROM clientes";
        //conectar a la base de datos
    parent::conectarBD();
    //enviar consulta
    return parent::getEjecutarSQL($sql);
        
    }
    public function insertarCliente($nombre,$apellido,$dni,$sexo,$celular,$correo)
    {
        $sql="INSERT INTO clientes(nombre,apellido,dni,sexo,celular,correo)"
                ." VALUES('$nombre','$apellido','$dni','$sexo','$celular','$correo')";
        parent::conectarBD();
        return parent::setEjecutarSQL($sql);
        
    }
}
