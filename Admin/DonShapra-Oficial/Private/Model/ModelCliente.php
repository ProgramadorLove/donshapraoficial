<?php

require_once ("Conexion.php");
class ModeloCliente extends Conexion {
    private $id;
    private $nombre;
    private $apellido;
    private $dni;
    private $sexo;
    private $celular;
    private $correo;
  
   
    
    
    public function __construct(){
        
    }
    
    public function insertarCliente($nombre,$apellido,$dni,$sexo,$celular,$correo){
        
        $sql="INSERT INTO clientes(nombre,apellido,dni,sexo,celular,correo)"."VALUES('$nombre','$apellido','$dni','$sexo','$celular','$correo')";
        parent::conectar_BD();
        return parent::setEjecutarSQL($sql);
        
    
    }
     public function mostrarCliente() {
        $sql="SELECT *FROM clientes";
        parent::conectar_BD();
        return parent::getEjecutarSQL($sql);
    }
    public function mostrarClienteId($id) {
        $sql="SELECT *FROM clientes WHERE id=".$id;
        parent::conectar_BD();
        return parent::getEjecutarSQL($sql);
    }

    public function eliminarCliente($codigo){
        $sql="DELETE FROM clientes WHERE id=".$codigo;
        parent::conectar_BD();
        //enviar consulta
        return parent::setEjecutarSQL($sql);
    }
    public function editarCliente($codigo,$nombre,$apellido,$dni,$sexo,$celular,$correo){
        $sql="UPDATE clientes
         SET "
            ."nombre='$nombre',"
            ."apellido='$apellido',"
            ."dni='$dni',"
            ."sexo='$sexo',"
            ."celular='$celular'"
            ."celular='$correo'"
            ." WHERE id=".$codigo;
    //conectar a la base de datos
         parent::conectar_BD();
        //enviar consulta
        return parent::setEjecutarSQL($sql);
    }
}

?>