
/*------------------------------------------------------*/
/*--------------ELIMINAR REGISTROS----------------------*/
/*------------------------------------------------------*/
function IdUsuario(codigo)
{
  var elemento =document.getElementById("enlace");
    elemento.href='../../Controller/Usuarios/ControllerEliminarUsuario.php?id='+codigo;
    console.log("enlace actualizado");
}
function IdCliente(codigo)
{
  var elemento =document.getElementById("enlace");
    elemento.href='../../Controller/Clientes/ControllerEliminarCliente.php?id='+codigo;
    console.log("enlace actualizado");
}
function IdProveedor(codigo)
{
  var elemento =document.getElementById("enlace");
    elemento.href='../../Controller/Proveedores/ControllerEliminarProveedor.php?id='+codigo;
    console.log("enlace actualizado");
}
function IdCategoria(codigo)
{
  var elemento =document.getElementById("enlace");
    elemento.href='../../Controller/Categorias/ControllerEliminarCategoria.php?id='+codigo;
    console.log("enlace actualizado");
}
function IdProducto(codigo)
{
  var elemento =document.getElementById("enlace");
    elemento.href='../../Controller/Productos/ControllerEliminarProducto.php?id='+codigo;
    console.log("enlace actualizado");
}
function IdCatalogo(codigo)
{
  var elemento =document.getElementById("enlace");
    elemento.href='../../Controller/Catalogo/ControllerEliminarCatalogo.php?id='+codigo;
    console.log("enlace actualizado");
}
/*------------------------------------------------------*/
/*------------------REGISTRA VENTAS---------------------*/
/*------------------------------------------------------*/
function pasarClientes(id,nombre,dni)
{
    console.log("si se llama!");

    var cod=document.getElementById("id_cliente");
    var cli=document.getElementById("cliente");
    var dn=document.getElementById("dni");


    cod.value=id;
    cli.value=nombre;
    dn.value=dni;

 }
/*------------------------------------------------------*/
 function pasarProducto(id,producto,precioV)
{
    console.log("si se llama!");

    var cod=document.getElementById("id_producto");
    var pro=document.getElementById("producto");
    var prec=document.getElementById("precio");
    document.getElementById('cantidad').value = "1";

    cod.value=id;
    pro.value=producto;
    prec.value=precioV;
}
/*------------------------------------------------------*/
function agregar()
{


    var codigo=document.getElementById("id_producto").value;
    var producto=document.getElementById("producto").value;
    var precio=document.getElementById("precio").value;
    var cantidad=document.getElementById("cantidad").value;
    var monto = (precio * cantidad);


    $.ajax({
        url:"../../Controller/Productos/ControllerDetalle.php",
        type:'POST',
        data:{
            id:codigo,
            pro:producto,
            pre:precio,
            cant:cantidad,
            mon:monto
        },
     }).done(
        function(respuestaServer)
        {
            $('#muestraDetalle').html(respuestaServer);
            console.log("mensaje");
            document.getElementById('id_producto').value = "";
            document.getElementById('producto').value = "";
            document.getElementById('precio').value = "";
            document.getElementById('cantidad').value = "";
            CalcularTotal();
            

        }
    );
}
/*------------------------------------------------------*/
function CalcularTotal() {
	var total;

	$.ajax({
		url: '../../Controller/Productos/ControllerTotales.php',
		type: 'POST'
	}).done(
		function (respuestaServidor) {

      subtotal = Number(respuestaServidor);
			igv = (subtotal * 0.18);
			total =(subtotal + igv);


			document.getElementById('subtotal').value = subtotal;
			document.getElementById('igv').value = igv;
			document.getElementById('total').value = total;
		}
	);
}
/*------------------------------------------------------*/
function quitar(indice) {
	var i = indice;
	$.ajax({
		url: '../../Controller/Productos/ControllerQuitar.php',
		type: 'POST',
		data: {
			posicion: i
		}
	}).done(
		function (respuestaServidor) {
			$('#muestraDetalle').html(respuestaServidor);
			CalcularTotal();
		}
	);
}
/*------------------------------------------------------*/
function registrar() {

  var id_cliente = document.getElementById('id_cliente').value;
  var tipo_venta = document.getElementById('tipo_venta').value;
  var num_venta = document.getElementById('num_venta').value;
  var fecha = document.getElementById('fecha').value;
  var subtotal = document.getElementById('subtotal').value;
  var igv = document.getElementById('igv').value;
	var total = document.getElementById('total').value;

	$.ajax({
		url: '../../Controller/Ventas/ControllerRegistrar.php',
		type: 'POST',
		data: {
      cli: id_cliente,
      tip: tipo_venta,
      num: num_venta,
      sub: subtotal,
      ig: igv,
			fec: fecha,
			tot: total
		}
	}).done(
		function (respuestaServidor) {
			// alert(respuestaServidor);
			if (confirm("Se Registro correctamente")) {
        var url = "MostrarVentas.php";
				$(location).attr('href', url);
			} else {
				var url = "RegistrarVentas.php";
				$(location).attr('href', url);
			}
		}
	);
}
/*------------------------------------------------------*/
function comprobante()
 {

  var nombre=document.getElementById('cliente').value;
  var dni=document.getElementById('dni').value;
  var fecha=document.getElementById('fecha').value;
  var subtotal=document.getElementById('subtotal').value;
  var igv=document.getElementById('igv').value;
  var total=document.getElementById('total').value;


   $.ajax({
  url: 'comprobantexml.php',
  type: 'POST',
  data: {

    cli:nombre,
    dn:dni,
    fe:fecha,
    s:subtotal,
    i:igv,
    t:total
         }
}).done(
   function(respuestaservidor)

   {

    var resultado= Number(respuestaservidor);
    if(resultado)
    {
      window.open("comprobante.php");

    }
    else{
      alert("error al generar el comprobante");

    }


  }
 );
}
/*------------------------------------------------------*/
function limpiar() {
	$.ajax({
		url: '../../Controller/Productos/ControllerLimpiarSession.php',
		type: 'POST'
	}).done(
		function (respuestaServidor) {
      document.getElementById('num_venta').value = "";
      document.getElementById('id_cliente').value = "";
      document.getElementById('cliente').value = "";
			document.getElementById('dni').value = "";
			document.getElementById('id_producto').value = "";
			document.getElementById('producto').value = "";
			document.getElementById('precio').value = "";
      document.getElementById('cantidad').value = "";
      document.getElementById('subtotal').value = "";
      document.getElementById('igv').value = "";
			document.getElementById('total').value = "";
			if (confirm("Se limpio el formulario, ¿desea continuar en la pagina actual?")) {
				var url = "RegistrarVentas.php";
				$(location).attr('href', url);
			} else {
				var url = "inicio.php";
				$(location).attr('href', url);
			}
		}
	);
}
/*------------------------------------------------------*/
function ModalDetalle(indice) {
	var id = indice;
	// alert(indice);

	$.ajax({
		url: '../../Controller/Ventas/DetalleVenta.php',
		type: 'POST',
		data: {
			val: id,
		}
	}).done(
		function (respuestaServidor) {
			$('#detalleContenedor').html(respuestaServidor);
		}
	);
}

/*----------------------------------------*/
$(document).ready(function(){

  //--------------------- SELECCIONAR FOTO PRODUCTO ---------------------
  $("#foto").on("change",function(){
    var uploadFoto = document.getElementById("foto").value;
      var foto       = document.getElementById("foto").files;
      var nav = window.URL || window.webkitURL;
      var contactAlert = document.getElementById('form_alert');
      
          if(uploadFoto !='')
          {
              var type = foto[0].type;
              var name = foto[0].name;
              if(type != 'image/jpeg' && type != 'image/jpg' && type != 'image/png')
              {
                  contactAlert.innerHTML = '<p class="errorArchivo">El archivo no es válido.</p>';                        
                  $("#img").remove();
                  $(".delPhoto").addClass('notBlock');
                  $('#foto').val('');
                  return false;
              }else{  
                      contactAlert.innerHTML='';
                      $("#img").remove();
                      $(".delPhoto").removeClass('notBlock');
                      var objeto_url = nav.createObjectURL(this.files[0]);
                      $(".prevPhoto").append("<img id='img' src="+objeto_url+">");
                      $(".upimg label").remove();
                      
                  }
            }else{
              alert("No selecciono foto");
              $("#img").remove();
            }              
  });

  $('.delPhoto').click(function(){
    $('#foto').val('');
    $(".delPhoto").addClass('notBlock');
    $("#img").remove();

  });

});