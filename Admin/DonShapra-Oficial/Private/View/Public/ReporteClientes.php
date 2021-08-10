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
                                    
                                    <a  href="pdfreportecliente.php"    class="btn btn-outline-info">IMPRIMIR</a>
                                    
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
                                <strong class="card-title">REPORTE DE CLIENTES</strong>
                            </div>
                            <div class="card-body">
                            <table id="myTable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>id </th>
                                            <th>Nombre </th>
                                            <th>Apellido</th>
                                            <th>Dni</th>
                                            <th>Sexo</th>
                                            <th>Celular</th>
                                            <th>Correo</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                              require_once  ("../../Controller/Clientes/ControllerMostrarCliente.php"); 
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