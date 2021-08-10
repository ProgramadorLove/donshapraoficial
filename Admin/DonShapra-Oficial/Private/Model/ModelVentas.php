<?php

require_once ("Conexion.php");
class ModelVentas extends Conexion {
    private $id;
    private $id_cliente;
    private $fecha_venta;
    private $num_venta;
    private $tipo_documento;
    private $subtotal;
    private $igv;
    private $total;

    //detalle_venta//
    private $id_venta;
    private $id_producto;
    private $cantidad;
    private $precio_unitario;
    private $monto;
   

    public function __construct(){
        
    }
    
    public function insertarVenta($id_cliente,$fecha_venta,$num_venta,$tipo_documento,$subtotal,$igv,$total){
        
        $sql="INSERT INTO venta(id_cliente,fecha_venta,num_venta,tipo_documento,subtotal,igv,total)"."VALUES($id_cliente,'$fecha_venta','$num_venta','$tipo_documento',$subtotal,$igv,$total)";
        parent::conectar_BD();
        return parent::setEjecutarSQL($sql);
        
    
    }

    public function mostrarId() {
        $sql="SELECT MAX(id) as id  from venta";
        parent::conectar_BD();
        return parent::getEjecutarSQL($sql); 
    }
    public function mostrarVentas() {
        $sql="SELECT venta.id,venta.id_cliente,clientes.nombre,clientes.apellido,venta.fecha_venta,venta.num_venta,venta.tipo_documento,venta.subtotal,venta.igv,venta.total
        FROM venta
        INNER JOIN clientes ON venta.id_cliente = clientes.id";
        parent::conectar_BD();
        return parent::getEjecutarSQL($sql);
    }
    public function insertarDetalle($id_venta,$id_producto,$cantidad,$precio_unitario,$monto){
        
        $sql="INSERT INTO detalle_venta(id_venta,id_producto,cantidad,precio_unitario,monto)"."VALUES($id_venta,$id_producto,$cantidad,$precio_unitario,$monto)";
        parent::conectar_BD();
        return parent::setEjecutarSQL($sql);
    }
    public function mostrarDetalle($id_venta) {
        $sql="SELECT detalle_venta.id,detalle_venta.id_producto,productos.producto,detalle_venta.cantidad,detalle_venta.precio_unitario,detalle_venta.monto
         from detalle_venta 
         INNER JOIN productos ON detalle_venta.id_producto = productos.id 
         WHERE id_venta=".$id_venta;
        parent::conectar_BD();
        return parent::getEjecutarSQL($sql); 
    }
 
   
}
?>