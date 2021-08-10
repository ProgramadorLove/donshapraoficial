<?php


require_once "conexion.php";

class Usuario extends Conexion {
    //put your code here
    
 
    private $id;
    private $nombre;
    private $apellido;
    private $dni;
    private $sexo;
    private $email;
    private $usuario;
    private $clave;
    private $cargo;
    public function __construct() {
        
    }
    public function  ValidarUsuario($usuario,$clave)
    {
        $sql="SELECT * FROM  usuario WHERE usuario= '{$usuario}' AND clave= '{$clave}'";
        parent::conectarBD();
        return parent::getEjecutarSQL($sql);
    } 
    public function insertarUsuario($nombre,$apellido,$dni,$sexo,$email,$usuario,$clave,$cargo)
    {
        $sql="INSERT INTO usuario(nombre,apellido,dni,sexo,email,usuario,clave,cargo)"
                ." VALUES('$nombre','$apellido','$dni','$sexo','$email','$usuario''$clave','$cargo')";
        parent::conectarBD();
        return parent::setEjecutarSQL($sql);
        
    }
    public function mostrarUsuario()
    {
        $sql="SELECT * FROM usuario";
        parent::conectarBD();
        return parent::getEjecutarSQL($sql);
    }
    public function actualizarUsuario($id,$nombre,$apellido,$dni,$sexo,$email,$usaurio,$clave,$cargo){
        
        try{
           $sql="UPDATE cliente SET "
                . "nombre='$nombre',"
                . "apellido='$apellido',"
                . "dni='$dni',"
                . "sexo='$sexo',"
                . "email='$email',"
               ."usuario='$usaurio',"
               ."clave='$clave',"
               ."cargo='$cargo',"
                . " WHERE id=$id";
         
        parent::conectarBD();
        parent::setEjecutarSQL($sql);
        return 1; 
        } catch (Exception $ex) {
        return 0; 
        }
    }
   public function eliminarUsuario($id){
        $sql="DELETE FROM usuario WHERE id=".$id;
        parent::conectarBD();
        return parent::setEjecutarSQL($sql);
    }          
     public function buscarUsuario($id){
        $sql="SELECT *FROM usuario WHERE id=".$id;
        parent::conectarBD();
        return parent::getEjecutarSQL($sql);
    }
   
    
}
