<?php
     require_once ("includes/Header.php"); 
     require_once ("includes/Menu.php"); 
     $fecha = date('Y/m/d H:i:s'); 
?> 
        

        <div class="main-content">
        <br>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            
                        
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Ventas</strong> 
                                    </div>
                                    <div class="card-body card-block">
        
                                            <div class="form-row">
                                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label for="validationCustom05">Documento</label>
                                                    <select class="form-control select-picker"  id="tipo_venta" required>
                                                            <option value="Factura">Factura</option>
                                                            <option value="Boleta">Boleta</option>
                                                    </select>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                    <label for="validationCustom05">N° Documento</label>
                                                    
                                                    <input id="num_venta" class="form-control"  type="text" >
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                    <label for="validationCustom05">Fecha</label>
                                                    
                                                    <input id="fecha" class="form-control" value="<?php echo $fecha; ?>" type="text" disabled>
                                                </div>
                                            </div>
                                            <br>
                                            <hr>
                                            <div class="form-row">
                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                                    <label for="validationCustom03">Cliente</label>
                                                    <input type="hidden" id="id_cliente"   class="form-control" disabled>
                                                    <input type="text" id="cliente"  class="form-control"disabled>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
                                                    <label class=" form-control-label">DNI</label>
                                                    <input type="text" id="dni"   class="form-control"disabled>
                                                </div>
                                              
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                <a class="btn btn-warning"  href="#" data-toggle="modal" data-target="#modalCliente">BUSCAR</a>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-row">
                                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                    <label for="validationCustom03">Producto</label>
                                                    <input type="hidden" id="id_producto"   class="form-control"disabled >
                                                    <input type="text" id="producto"  class="form-control"disabled>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                    <label class=" form-control-label">Precio</label>
                                                    <input type="text" id="precio"  class="form-control"disabled>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                    <label class=" form-control-label">Cantidad</label>
                                                    <input type="text" id="cantidad"   class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#modalProductos">BUSCAR</a>
                                                </div>
                                                <div class="col col-md-3">
                                                </div>
                                                <div class="col col-md-3">
                                                </div>
                                                <div class="col col-md-3">
                                                <button type="button" class="btn btn-warning btn-block" onclick="agregar();">Agregar</button>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-row">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                                                    <div id="muestraDetalle">
                                                        <table  id="myTable" class="table table-striped table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Descripcion</th>
                                                                    <th scope="col">P.Unirario</th>
                                                                    <th scope="col">Cant</th>
                                                                    <th scope="col">Total</th>
                                                                  
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr><th colspan="6">
                                                                
                                                                </th>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-row">
                                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label class=" form-control-label">Sub Total</label>
                                                    <input type="text" id="subtotal" class="form-control" readonly>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                <label class=" form-control-label">Igv</label>
                                                    <input type="text" id="igv"   class="form-control" readonly>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                                    <label class=" form-control-label">Total</label>
                                                    <input type="text" id="total"   class="form-control" readonly>
                                                </div>
                                            </div>
                                         
                                            <div class="card-footer">
                                             
                                                <a  class="btn btn-warning " href="#" value="Registrar" onclick="registrar();">
                                                     Guardar
                                                </a>
                                                <a  class="btn btn-danger " href="#" value="Limpiar" onclick="limpiar();">
                                                    Limpiar
                                                </a>
                                      
                                            </div>
                                      
                                    </div>
                                
                                </div>
                            </div>
                  
            
            
                        </div>


</div><!-- .animated -->
</div><!-- .content -->
<?php
     require_once ("includes/Footer.php"); 
?>