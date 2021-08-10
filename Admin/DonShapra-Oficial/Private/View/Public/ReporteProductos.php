<?php
     require_once ("includes/Header.php"); 
     require_once ("includes/Menu.php"); 
?> 
       <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Inicio</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    
                                    <a  href="pdfreporteproducto.php"    class="btn btn-outline-info">IMPRIMIR</a>
                                    
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
               
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"> 
                                <strong class="card-title">REPORTE DE PRODUCTOS</strong>
                                
                            </div>
                           
                            <div class="card-body">
                                <table id="myTable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>id </th>
                                            <th>Producto</th>
                                            <th>Descripcion</th>
                                            <th>Proveedor</th>
                                            <th>Categoria</th>
                                            <th>Stock</th>
                                            <th>Precio Venta</th>
                                            <th>Precio Compra</th>
                                            <th>Foto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                              require_once  ("../../Controller/Productos/ControllerMostrarProductos.php"); 
                                    ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
<?php
     require_once ("includes/Footer.php"); 
?>