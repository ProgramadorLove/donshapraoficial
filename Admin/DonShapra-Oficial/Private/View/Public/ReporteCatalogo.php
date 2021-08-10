<?php
     require_once ("includes/Header.php"); 
     require_once ("includes/Menu.php"); 
?> 
       

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"> 
                                <strong class="card-title">REPORTE DE CATALOGO</strong>
                            </div>
                            <div class="card-body">
                                <table id="myTable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>id </th>
                                            <th>Nombre</th>
                                            <th>Descripcion</th>
                                            <th>Proveedor</th>
                                            <th>Categoria</th>
                                            <th>Stock</th>
                                            <th>Precio Venta</th>
                                            <th>Foto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                              require_once  ("../../Controller/Catalogo/ControllerMostrarCatalogo.php"); 
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