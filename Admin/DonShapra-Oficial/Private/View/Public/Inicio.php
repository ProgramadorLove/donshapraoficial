<?php
     require_once ("includes/Header.php"); 
     require_once ("includes/Menu.php"); 
     require_once ("includes/dashboard.php");
?> 
    <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <!--<div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">  
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-user"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                        <div class="stat-text"><span class="count"><?php echo $count_usu; ?></span></div>
                                            <div class="stat-heading">Usuarios</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-cart"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $count_produc; ?></span></div>
                                            <div class="stat-heading">Productos</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="pe-7s-car"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $count_pro; ?></span></div>
                                            <div class="stat-heading">Proveedores</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $count_cli; ?></span></div>
                                            <div class="stat-heading">Clientes</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                  <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $count_usu; ?></h3>

              <p>Usuarios</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="ReporteUsuarios.php" class="small-box-footer">Mas Info<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $count_produc; ?></h3>

              <p>Productos</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="ReporteProductos.php" class="small-box-footer">Mas info<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $count_cli; ?></h3>

              <p>Clientes</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="ReporteClientes.php" class="small-box-footer">Mas info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $count_pro; ?></h3>

              <p>Proveedores</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="ReporteProveedores.php" class="small-box-footer">Mas info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

                <!-- /Widgets -->

                
               
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
                <!-- Calender Chart Weather  -->
              
                
               
              
                <!-- /Calender Chart Weather -->
            </div>
     <!-- .animated -->
        </div>
<?php   
     require_once ("includes/Footer.php"); 
?>