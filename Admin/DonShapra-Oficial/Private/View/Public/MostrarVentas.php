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
                                    <li><a href="#">Inicio</a></li>
                                    <li><a href="#">Ventas</a></li>
                                    <li class="active">Reporte de ventas</li>
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
                                <strong class="card-title">REPORTE DE VENTAS</strong>
                            </div>
                            <div class="card-body">
                            <table id="myTable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>id </th>
                                            <th>Clientes </th>
                                            <th>Fecha </th>
                                            <th>N° venta</th>
                                            <th>Documento</th>
                                            <th>Subtotal</th>
                                            <th>Igv</th>
                                            <th>Total</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                              require_once  ("../../Controller/Ventas/ControllerMostrar.php"); 
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