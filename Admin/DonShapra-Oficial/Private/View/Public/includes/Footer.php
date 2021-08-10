<div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                      DonShapra
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="https://colorlib.com">Version01</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->
<!-- Modal Cerrar sesion -->
    <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Decea salir del sistema?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <a href="../../Controller/ControllerCerrarSesion.php"  class="btn btn-primary">OK</a>
      </div>
    </div>
  </div>
</div> 
<!-- /modal cerrar sesion -->
<!-- modal eliminar -->
<div class="modal" id="Modaleliminar">
                      <div class="modal-dialog">
                        <div class="modal-content">

                          <!-- Modal Header -->
                          <div class="modal-header">
                            
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>

                          <!-- Modal body -->
                          <div class="modal-body">
                            Desea eliminar el registro?
                          </div>

                          <!-- Modal footer -->
                          <div class="modal-footer">
                           
                            <button type="button" class="btn btn-danger" data-dismiss="modal">NO</button>
                            <a href="#" id="enlace" class="btn btn-primary" >SI</a>
                            
                          </div>

                        </div>
                      </div>
                    </div>
<!-- /modal eliminar -->
<!-- modal categoria -->
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <center><h4 class="modal-title w-100 font-weight-bold">Nueva Categoria</h4></center>
      <form action="../../Controller/Categorias/ControllerRegistroCategoria.php" method="POST">
        <div class="md-form mb-5">
          <br>
   
       
        
        <label data-error="wrong" data-success="right" for="defaultForm-email">Categoria</label>
          <input type="text" required name="categoria" id="defaultForm-email" class="form-control validate">


        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
      <button class="btn btn-warning" type="submit">Guardar Datos</button>
      </div>
      
      </form>
    </div>
  </div>
</div>
<!-- /modal categoria -->
<!-- modal cliente -->
			<div class="modal fade" id="modalCliente" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
                <div class="table-responsive m-b-40">
                    <table class="table table-borderless table-data3">
                          <thead>
                                 <tr>
                                    <th>id</th>
                                    <th>Cliente</th>
                                    <th>Dni</th>
                                    <th>Direccion</th>
                                    <th>Telefono</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php require_once  ("../../Controller/Clientes/ControllerMostrar.php"); ?>
                            </tbody>
                     </table>
                  </div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
						</div>
					</div>
				</div>
			</div>
<!-- /end modal cliente -->
<!-- modal cliente -->
<div class="modal fade" id="modalProductos" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
                <div class="table-responsive m-b-40">
                    <table class="table table-borderless table-data3">
                          <thead>
                                 <tr>
                                 <th>id </th>
                                  <th>Producto</th>
                                  <th>Descripcion</th>
                                  <th>Proveedor</th>
                                  <th>Categoria</th>
                                  <th>Stock</th>
                                  <th>Precio V.</th>
                                  <th>Precio C.</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php require_once  ("../../Controller/Productos/ControllerMostrar.php"); ?>
                            </tbody>
                     </table>
                  </div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
						</div>
					</div>
				</div>
			</div>
<!-- /end modal cliente -->
<!-- Modal DEtalle-->
<div class="modal fade" id="detalleModal" tabindex="-1" role="dialog" aria-labelledby="detalleModalTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
						<table class="table table-hover">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">Producto</th>
										<th scope="col">Precio U.</th>
										<th scope="col">Cant</th>
										<th scope="col">Monto</th>
									</tr>
								</thead>
								<tbody id="detalleContenedor">
             
								</tbody>
							</table>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
				</div>
				</div>
			</div>
			</div>
			<!-- end Mostrar detalle ventas -->	
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	 crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
	 crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
	 crossorigin="anonymous"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../assets/js/funciones.js"></script>


</body>
</html>