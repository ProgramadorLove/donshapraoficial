<?php

require_once ("Conexion.php");
class ModeloUsuario extends Conexion {
    private $id;
    private $nombre;
    private $apellido;
    private $dni;
    private $sexo;
    private $celular;
    private $usuario;
    private $clave;
    private $cargo;
   
    
    
    public function __construct(){
        
    }
    
    public function insertarUsuario($nombre,$apellido,$dni,$sexo,$celular,$usuario,$clave,$cargo){
        
        $sql="INSERT INTO usuarios(nombre,apellido,dni,sexo,celular,usuario,clave,cargo)"."VALUES('$nombre','$apellido','$dni','$sexo','$celular','$usuario','$clave','$cargo')";
        parent::conectar_BD();
        return parent::setEjecutarSQL($sql);
        
    
    }
     public function mostrarUsuario() {
        $sql="SELECT *FROM usuarios";
        parent::conectar_BD();
        return parent::getEjecutarSQL($sql);
    }
    public function mostrarUsuarioId($id) {
        $sql="SELECT *FROM usuarios WHERE id=".$id;
        parent::conectar_BD();
        return parent::getEjecutarSQL($sql);
    }

    public function eliminarUsuario($codigo){
        $sql="DELETE FROM usuarios WHERE id=".$codigo;
        parent::conectar_BD();
        //enviar consulta
        return parent::setEjecutarSQL($sql);
    }
    public function editarUsuario($codigo,$nombre,$apellido,$dni,$sexo,$celular,$usuario,$clave,$cargo){
        $sql="UPDATE usuarios SET "
            ."nombre='$nombre',"
            ."apellido='$apellido',"
            ."dni='$dni',"
            ."sexo='$sexo',"
            ."celular='$celular',"
            ."usuario='$usuario',"
            ."clave='$clave',"
            ."cargo='$cargo'"
            ." WHERE id=".$codigo;
    //conectar a la base de datos
         parent::conectar_BD();
        //enviar consulta
        return parent::setEjecutarSQL($sql);
    }
}

?>