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
                                    <li><a href="#">Usuarios</a></li>
                                    <li class="active">Reporte de usuarios</li>
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
                                <strong class="card-title">REPORTE DE USUARIOS</strong>
                            </div>
                            <div class="card-body">
                            <table id="myTable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Dni</th>
                                                <th>Sexo</th>
                                                <th>Celular</th>
                                                <th>Usuario</th>
                                                <th>Clave</th>
                                                <th>Cargo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                              require_once  ("../../Controller/Usuarios/ControllerMostrarUsuario.php"); 
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