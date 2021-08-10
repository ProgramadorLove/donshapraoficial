<?php

require_once ("Conexion.php");
class ModeloProducto extends Conexion {
    private $id;
    private $producto;
    private $descripcion;
    private $proveedor;
    private $categoria;
    private $stock;
    private $precioV;
    private $precioC;
    private $imagen;
    private $ruta;
    private $destino;

   
    
    
    public function __construct(){
        
    }
    
    public function insertarProducto($producto,$descripcion,$proveedor,$categoria,$stock,$precioV,$precioC,$imagen,$ruta){
        
        $destino="../../View/assets/images/productos/".$imagen;
        copy($ruta,$destino);
        
        $sql="INSERT INTO productos(producto,descripcion,proveedor,categoria,stock,precioV,precioC,imagen)"."VALUES('$producto','$descripcion','$proveedor','$categoria',$stock,$precioV,$precioC,'$imagen')";
        parent::conectar_BD();
        return parent::setEjecutarSQL($sql);
        
    
    }
    public function mostrarProductoCategoria() {
        $sql="SELECT *FROM categoria";
        parent::conectar_BD();
        return parent::getEjecutarSQL($sql);
    }
    public function mostrarProductoProveedor() {
        $sql="SELECT *FROM proveedores";
        parent::conectar_BD();
        return parent::getEjecutarSQL($sql);
    }
     public function mostrarProducto() {
        $sql="SELECT  *FROM productos ";
        
        parent::conectar_BD();
        return parent::getEjecutarSQL($sql);
    }
   

    public function mostrarProductoId($id) {
        $sql="SELECT *FROM productos WHERE id=".$id;
        parent::conectar_BD();
        return parent::getEjecutarSQL($sql);
    }

    public function eliminarProducto($codigo){
        $sql="DELETE FROM productos WHERE id=".$codigo;
        parent::conectar_BD();
        //enviar consulta
        return parent::setEjecutarSQL($sql);
    }
    public function editarProducto($codigo,$producto,$descripcion,$proveedor,$categoria,$stock,$precioV,$precioC,$imagen,$ruta){

        $destino="../../View/assets/images/productos/".$imagen;
        copy($ruta,$destino);
        
        $sql="UPDATE productos SET "
            ."producto='$producto',"
            ."descripcion='$descripcion',"
            ."proveedor='$proveedor',"
            ."categoria='$categoria',"
            ."stock=$stock,"
            ."precioV=$precioV,"
            ."precioC=$precioC,"
            ."imagen='$imagen'"
            ." WHERE id=".$codigo;
    //conectar a la base de datos
         parent::conectar_BD();
        //enviar consulta
        return parent::setEjecutarSQL($sql);
    }
}

?>