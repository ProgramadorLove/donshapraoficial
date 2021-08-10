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
                                <strong class="card-title">REPORTE DE PROVEEDORES</strong>
                            </div>
                            <div class="card-body">
                                <table id="myTable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>id </th>
                                            <th>Empresa o Persona </th>
                                            <th>Dni o Ruc</th>
                                            <th>Telefono</th>
                                            <th>Celular</th>
                                            <th>Direccion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                              require_once  ("../../Controller/Proveedores/ControllerMostrarProveedor.php"); 
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