<?php

require_once ("Conexion.php");
class ModeloProveedor extends Conexion {
    private $id;
    private $empresa_nombre;
    private $dni_ruc;
    private $telefono;
    private $celular;
    private $direccion;
   
    
    
    public function __construct(){
        
    }
    
    public function insertarProveedor($empresa_nombre,$dni_ruc,$telefono,$celular,$direccion){
        
        $sql="INSERT INTO proveedores(empresa_nombre,dni_ruc,telefono,celular,direccion)"."VALUES('$empresa_nombre','$dni_ruc','$telefono','$celular','$direccion')";
        parent::conectar_BD();
        return parent::setEjecutarSQL($sql);
        
    
    }
     public function mostrarProveedor() {
        $sql="SELECT *FROM proveedores";
        parent::conectar_BD();
        return parent::getEjecutarSQL($sql);
    }
    public function mostrarProveedorId($id) {
        $sql="SELECT *FROM proveedores WHERE id=".$id;
        parent::conectar_BD();
        return parent::getEjecutarSQL($sql);
    }

    public function eliminarProveedor($codigo){
        $sql="DELETE FROM proveedores WHERE id=".$codigo;
        parent::conectar_BD();
        //enviar consulta
        return parent::setEjecutarSQL($sql);
    }
    public function editarProveedor($codigo,$empresa_nombre,$dni_ruc,$telefono,$celular,$direccion){
        $sql="UPDATE proveedores SET "
            ."empresa_nombre='$empresa_nombre',"
            ."dni_ruc='$dni_ruc',"
            ."telefono='$telefono',"
            ."celular='$celular',"
            ."direccion='$direccion'"
            ." WHERE id=".$codigo;
    //conectar a la base de datos
         parent::conectar_BD();
        //enviar consulta
        return parent::setEjecutarSQL($sql);
    }
}

?>