
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
<!-- abre el modal para el carrito -->
<link rel="stylesheet" href="css/shop.css" type="text/css" media="screen" property="" />
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>DON shapra</title>
	<script src="js/minicart.js"></script>
	<script>
		shoe.render();

		shoe.cart.on('shoe_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!--
		
		CSS
		============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>

	<!-- Start Header Area -->
	<?php require_once("headermenu.php"); ?> 
	<!-- End Header Area -->

	<!-- start banner Area -->
	
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
				<?php 
											require_once ("../Admin/DonShapra-Oficial/Private/Model/ModelBanner.php");
											$enlace=new ModeloBanner(); 

											$resultado=$enlace->mostrarBanner();
											while($fila=$resultado->fetch_array(MYSQLI_ASSOC))
											{
											$imagen=$fila['imagen'];
											$nombre=$fila['nombre'];
											$descripcion=$fila['descripcion'];
                                            $precio=$fila['precio'];
                                       
				?>
					<div class="active-banner-slider owl-carousel">
						<!-- single-slide -->
						
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1><?php echo $nombre;?> <br>Colección!</h1>
									<p><?php echo $descripcion; ?> </p>
									<div class="add-bag d-flex align-items-center">
										
							<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart">
													<input type="hidden" name="add" value="1">
													<input type="hidden" name="shoe_item" value="<?php echo $nombre; ?>">
													<input type="hidden" name="amount" value="<?php echo $precio; ?>">

													<button type="submit" class="primary-btn">Agregar &nbsp;&nbsp;<i class="fa fa-cart-plus" aria-hidden="true"></i></button>

													<a href="#" data-toggle="modal" data-target="#myModal1"></a>
												</form>
					
							

							</form>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="../Admin/DonShapra-Oficial/Private/View/assets/images/Banner/<?php echo $imagen; ?>" alt="">
								</div>
							</div>
						
						</div>
						<?php }  ?>	
						<!-- single-slide -->
						
							<div class="col-lg-5">
							
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	
	</section>
		
	<!-- End banner Area -->

	<!-- start features Area -->
	<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon1.png" alt="">
						</div>
						<h6>Delivery Gratis</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon2.png" alt="">
						</div>
						<h6>Politica de Devolución</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon3.png" alt="">
						</div>
						<h6>24/7 Soporte</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon4.png" alt="">
						</div>
						<h6>Pago</h6>
						<p>Delivery Gratis, sin costo alguno</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end features Area -->

	<!-- Start category Area -->
	<section class="category-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-12">
					<div class="row">
						<div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="" alt="">
								<a href="img/category/c1.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">EStoy A prueba</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="https://product1.djicdn.com/uploads/sku/covers/31239/small_9bd59f59-93c5-4186-a4b8-a1bffbdb5208@2x.png" alt="">
								<a href="img/category/c2.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Sneaker for Sports</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="data:image/jpeg;base64,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" alt="">
								<a href="img/category/c3.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Product for Couple</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxITEhUSEhMVFRUVFRUXFRcWFRcWFhUVFxUXFxcVFRUYHSggGBolHRUXITEhJSkrLi4uFx8zODMtNygtLi0BCgoKDg0OFQ0PFSseFR0zLzcrLTcrLS0uLjEuKysrNys4KysrLS0rNzgrKzcrOCsrKysuKystLS0tKysrKystK//AABEIAJ8BPgMBIgACEQEDEQH/xAAcAAABBAMBAAAAAAAAAAAAAAAAAQQGBwIDBQj/xABOEAABAwICBQcHBwgJAwUAAAABAAIDBBEhMQUGEkFRBxMyYXGBkSJCUqGxwdEUI2JygpKyM0NEVJPC0vAkJTRTc4Oi4fEXo9MVFoSzw//EABcBAQEBAQAAAAAAAAAAAAAAAAABAgP/xAAbEQEBAQEAAwEAAAAAAAAAAAAAAQIRAxJRMf/aAAwDAQACEQMRAD8AvBCEKqEIQgEIQgEIQgEIQSgEKtdc+V2mpnGKlAqZRg5wd8yw8NodM9TcOtQGo5YNJuPkmJn1Yx++XIPRCF5tdyo6WP6R4Mi/gWbeVXSwt88D/lRG/Vg1B6PQqHouW6rbhNBA/s24z7XexdOLlyJH9ix6pj/40FyoVPx8tMjiAzRznHDASuJxysBEpPq7rvV1UgYNFzRN858j3Ma0X+lELnqQTlCEIBCaaU0nDTxulnkbHG3NzjYdQHEngMSqY1v5Z5HEx0DebZlzrwC93W1hwYO257EF4PkAxJA7TZam1kZykYexw+K8h6Q0tNM4vmkfI45l7i4+vd1LKmqjbHcg9fCZvpDxCyDgvIwqitrK9wyJHYUHrVC8qwaxVDOhPK36sjx7CpVq9yp1sLhzr+fj3tkttW+jJnftug9AITbRtayeJk0ZuyRjXtO+zhcXHFOUAhCEAhCEAhCEAhCEAhCEAhCEAhCEAhCEAhaqqpZGxz5HNYxoLnOcQGtAzJJwAVQ65ctTWbUWj4+cOI5+QHY+xHm7tNuwoLW0vpWCmjdNUSNjjbm5xt3AZuPUMSvPvKJypzVu1BTbUNNkd0kw+mR0Wn0R3ncoNpvTlTVyc5UyvlfuLjg3qa0YNHUAEyjG/wAEGxpt2rIPXZ1T1SqtIS83Tswb05HYRxj6Tt56hc+1WRo7UvRFG4CqkNVIOkDgy+/5tpwb9Ym6qqf5229bGzHivSmipdG4Nhhoo2+jsxtP4U80pqnQVA8qmpj1hrQR1i1kHmaKUkgWuSQABiSSbAAbyeCn+iOTDSUjRII44b4gSv2H8RcMBLe+xUn0ryeNo3tqaOQRPZi3atgbWOwXA42PWk0ZrFpB7mxmp2jI4RssxuLnG19q19kC5uNww4kOWdF6ep5BEySZ7jb8nUiUAbi4SG7W4ZuAClujNH6wYbdVC0cJAxzh9yO3rU40Zo5kDNhmN8XuOLpHnN7zvcU6KiOHRR6Rb+UmpX9kMgPiH29S6W3Nb83fsdbwTi6QuQVnrnydV2kJuclr4w0fk4hC/YjHV85iTvdmeywEYfyGVO6shPbE8e8q6ZtJwM6c0be2Ro9pTc6w0n6zB+1Z8VVU5FyI1bXAmppyButIPcVhLyLV9yWz0uJJxdKO78mrm/8AX6T9Zg/as+KyGm6b9Yh/as+KCkTyNaT/ALykP+bL/wCFYHke0oPOpT/mv98avMaXp/7+L9oz4rIaRh3Sx/fb8UFCSckulRk2A9k3xaFno3kn0kZGtlbHGwnypOca8NHENadpx6sO0K+xWRnJ7PvD4rMTN9IeIQYaGomU8EUDD5MTGsBOZ2Ra56zmnu2OKbB44rJRG/bHFBkHEeK0WQgcBwORSpm+JpzaD2gFI2MDLDsJA8AgeoTdjyN9+1bWyBBmhCEAhCEAhCEAhCEAmGm9MQ0kLp53hkbMzvJOTWje47gnVVUNjaXONgFSHK5K+rka7nSyGNvkxluAdjtPNjiTl1AdqCK6/wCv0+kX7OMdM0+REDnbJ8pHSd1ZDdxMLdIkkctZVVs5xd3VHV6Stm2G+TG2xlf6IOQF/OOPZidy5tNQYbUhsOG/v4J0a/ZbsMwbe9t1+NuOAxQWRpLWFtPCKGiIihb03szkdv8AKzt17/WYw6ujbm+596jEPOzPDG3JPgOsncFLaDQNNEAZLzP33NowepoxPf4BAwibJO75t7zbIMB2R9Y4DxViauaZdSQbD/nZbnZL3BzWDcGtAFz1km25Rs1u5oDWjJrRYDsATeSoJQdvTGnJah1nvJve+OTd4AGAv1Lrcn8POV7Da4hilkv9M7MTfU9/gqykr5DVtjY4hoALwN5sXYnsLQrc5IYbvqpD6MLR4yOP7qCyC5cLWfWmCiaDKbvd0I29J3X1N6ynmm9JspoJJ5OjG0m29xya0dZJA71QlZVS1Mzp5zeR+NtzRua0bgB/OaCS6U5R6yUkR7MLeDQC7vc73WUbq9KTy/lJZH/We4+q6VtMjmUDQXSm6eiBbG06Dn2KNkro/JVlDROc4NaCXOIa0DMuJsB4lBzebPjl29S7lBqZWygFsDmg75LR+pxBPgrR1Y1YipGg2DpiPLk4Xzazg31n1LuIKoh5Mqo9J8DftPcfUy3rTpvJdLvqI+5jj7wrOQgrUcmEn6039kf4kv8A00m3VTfuPH7yslKgrX/pxVbqy3fKPYVgeT3SA6Nef2s49ys1CCrjqNpgdHSA76ioH7qVmrOn2dGsDv8A5Eh9T2K0EIK4jm1ihzYycdfMn8LmuTuPlBmh/t9BNCN72g7Pg8Af6ip6i6DnaB1lpqoXgla+wuW9F7e1hxt15LuA3UQ01qXTTHnIwaecG7ZofIIdxc0YO9R60urmnZo5vkVdYTWvFK3COoYN7eDxvaoiXoQhAIQhAIQhBG9cJSA0bsSqk1+ikdARFHJI5xAOwxzyBmSdkGw3d6tbXaQWYN+PgoY6VwN2kg8QSD4hBSbtC1X6tP8AsZP4VlTUToyTKxzXDJrmlpHXY49iuN1S/Mvf94/FVNpzSBllfISTtOwvidkYNHhZVTOonJS01PtHFN24ldakZkEHZ0bGI24DE+xbpJk32khcgciRJtrTdBdggZ6JoHiZ8z7eVfZF7mxN8e4BXZyQttTzuO+osOsNhi97nKoqibYbfecApVyY6fmZPzW0XRPudg5BxLfLHXYIJFyx6T2WU8AykkL3djLBt+q77/ZUGaz5wjgG/hB967HLJU3rYGbmwtd3ukf7mhcx+Ez/ALP4GoHLY8FjzK27axugRrQlsgFBcgyFlI+T+jElW6QjCCO4/wASW7WnuY1/3wovtKe8l8XzE8n95UO+7GxjAPEO8UE0QkCVAJUiECoSJUAhCECpEJUCJUiVAi5Os2hhVQlgOzKw7cEm+OVuLSDwJwPUushAz1S0uamma9w2ZGkxzN9GVhs4W3ce9dlRLRXzGk5osmVUTZ28OdYQyS3WQQ5S1RAhcjW+ofHQ1MkZLXshe5pGYIaTcdapSt5XKwwRwx2je1uzJNcPfJhYHZc2zDxON+pBdGkdZIonbGL3DO1rDvTCXXAWwiPe7D2LztUazVLiSZpLnEnaLb8ejZcus0m94Ic5zrjznF3tQXVpvWSJzy6aaMHhtjDqAzUcqtcaRt7Pc8j0WO9rrBVc0rJVU10jrqx7HRxxuBeC3aJAttYXsL8eKhk8hucvBYNOI7ksuaDUZSP+At8GlHNOQKavWoZoJBDpe+YsnkdTdRynOK69Og6YlSPlAFybAYk9S0MK06QPzT/qlA7rZw5jS0gjHEYjJSPk2F6qP6oUD0Yfmj9d34WqfcmP9pb9UexBnyuP/rAdUEX4nn3piZ7yOPG3sATjlZP9Yn/Cj9hXGilJxIt33w3FB3GTrMvXIjlfsXDfKtfZ2hnw2sk+lkcALNvcgHG1gcz124b0DkORtpoZTcAC4sbuuMCCLC2+9z2WWbJDc3FhhY3zvnhuxQOLqyOTEf0Bp4y1B/78irEyG4FhYg3N8QRa1m78z4KzuTJ39AZ/iT//AHyIJWEt0iEAlSJUCoXDOk5I60QSW5qWPahNrEPb0mE7958FyRrJO4iRuxzT61kDPJxMeIc699+FuwrPtHbPg1fxM0LgauaWmkkmgnDNuLZO1GbtLX3IHaLJhpnT9W2eqhp2QuMEUErecuLtdtc5c7QF8MMlZeue8XF5UuQoPLrdU1ApoqCKMzzQCeTnSdiFl9nG1ibuBAPUMMcEOtlYIZdqFgqKN7DVxC55yncL87AdrDAE43yKrKcpVw9BaTmqJZXgNFJsxfJ3WO1LtMD3Pve2yLgWtnfgu4gEiVCCN6yu5upoJ+FQYj9WZhGPe0KYKF8oeFK2T+6qIH+D7fvKaBRDLTdPzlNPH6cUjfvMI968fvcbr2Y8XBHEWXjnSsexNI3g9w8CUDVxWtyyKxKqtkayWLMlkgxKzmzWsrZMgbvWkZrbItIQOac4qVaKZTixkdfycrnpEZWaL5qJwnFS3RL3OaLFjQAG447xibZH4KWJY7DayBguITwBMbQLm9sTjl71wNMybTZnAWDttwHC9zZPa2VxDQXhwIBwAFiLgXF+GPemVWy8bx9F3sVVytFfkj/iH8LVPOTN39Jb9UKBaHN43Dg9p8Wn+FTPk9ltUx9lvAgIHfK23+sL8YYz63D3KOwHgM3Y49XS8dylPLHFarhf6UAHe2R/8QURi7L+UD6s/wDZA7iiwtzfmSC23uJ6N77877k+mxa3yQbFhttYNsRiDvt67LnU4+hufv4/xepbWsw/Jt6MXneicuxu470DiJliCGNwMtvKyub37znwQATclkZJ5om794d7t3ErWxvldFvSf52OIz7TvHBYMHk9GLoR+dhg7AfVG48UHQkPlAgMJG0Lk4jAYDwxVnclL70IBtcSzXtiMZXHA8MVVA6WUXTdvxxb+M7+pWVyO1F6WVvk+RMej0fKZG/yfo+Vggn6VIEqBUJEqDh630DpIRJGPnYHCWO2ZLc29dxu6gmentGbFPTshjPkVMTy1oLtm7nFxwGQLs1KULNnXXPmueT4j2rlIIZ6mIQ7Ddpj2vs4iQOBJBc4kXBOQ4lR3W+jaauqMtPNPE6jpzsxB13PbUAANcN4uCRnYFTU0k2048+bHogRss3HDHM4WHj3ApJrOBnNyQQWxtBbbdjcEHDwVk4xvXte1D6epraOOlndTufD8n5uanhYNuE7RdG5oPlHySGkF27HE3SjS+kHsqKlkD28+6KGkhfHfYGO3PNYXDe027sTL2Ucu+dxHk+a0EWFjY8Dn2+Cylo5CTaZ7QQ3INvgBvPG2PbuVZcHVijlo6iSj2HGmfeWneASyIk/OQOO4XuW396li59NQPa4EzyOsb2NrZEWw3Y37gn6BUiEII3yitvo+fq5s/8AdYpbTm7Wn6I9iiuv4vQTDe7mwO0ysUsibZoHAAepRGS8la8U/N19S3hNKPB5XrVeZeWGj5vSk+GDi1w+00E+slBBisXrMhYFVWbMlksI8lmECOWT8h2LFyydkP53oG8i0rbIsGtJNgLoNka6tG5MaeiefNI7cF1qajIzQOIinGYWDIlvYMEDKChbHEQ25uQSTnw966WqE2zUx/WI96QR7TCP5unGquh5ZapgY3okPfcgWbfZJGPlZjJBKOWKC4pZBwlaf9BHvVfxdfEHw3q1uVClJoY3f3crb9jmub7dlVZCg2MZl5Pp7+Px9SzDcOg3osFtrgej2D1rKONmGHHefOzSuhGIDW2swDHMXytutu4oBmfRb0yb3xxbn2+5I22z0Yug0Z4Z5fV4daUR2PRZ0nb8crX7eKwDcMoug3sz/Dw60G8O8rKPpn63Q/H7lPOR2qtJPF5OLIpBs9G9ix2z1eS3xVfDPzOme3o/i9y7eo+khBXQO2m7L7xO2cAGSH5s/eY0d5QXwClusAVkEGV0qxSoMkXSJQgVCEIFQhCAQhCAQhCDg63HabBDvlqYh9lpLj7ApWohE75RpMAYso2G53c9JhbuFvulS9RAqm5XNS5amdtRHbY5sNeb4hw2rYcOirZWqpga9pa4XBFig8wu1EqbA2aRxD259fBN/wD2TUb9gdrvgCr6qNVnNJ2ZWBp9K4Phay0O1ej8+oj7mk+9VVIM1JfvlaOxpPwTqHUhvnTE/VYB7SVcLtAUu+V5+qz4rU7QVPudL3hgQVXJqTFsO2XyF+ydm5bbathcAKCStIw4L0Z/6JHuLu8j3BVVyj6smnm51lzFLjf0ZPOb39Idp4IIG3NdOltuACYyRrOCWyDvsfcBZkphSzg4J1ziDe0rO6atkWwPQa5dJiN7WOabOt5V8rm2IU05PJgK9gP5yOWMdtmy/wD5FV5p+K7Q70TY9h/3AUj1T0jsz0sx3SxbXUHHm3nwc5BdWsGi/lFNLBhd7Ds3y2x5TD94BUHslpIIIIJBBzBBxBXo66rHlL1XLXmshbdjsZgPNd6duB39faggjXLF2fRGbd+4Y37RwWIcsT1Ab3fa/wCEGwO6meec/X2cUod1R+YMuBy/hWkjqblbHrOIPVl2rIOx83PvsB+IeoIHLZxn83m44DcN/aN6QvBABcAbAeSLEPJGy5uOHUE3EmGbRhw3uOB7D61nzv0gMbDDK3S/ncgvPUXWEVdONojnWWbKPpAdID0TmPDcVJQvOmidLSQSCaF+y71ObnsuG8fzgrO0LymQPAFQ10Tt7gC9h8MR4d6CfJVyKXWSjk6FTCernGg+BN10GVkZykYexwPvQOEq0fKWem37wWDtIwjOWMdr2j3oHaFzJNYKRvSqYB2ys+K0O1soB+lwd0jT7EHaSqPu100eP0qPu2j7AtEmv2jh+kX7I5D+6gk6FC5+U2gbkZX/AFY7fjIXLqeVdhNoKV7ictt4b/pYHX8UFkKOay6yiI/J6f5yqf5LWNx2CfOfwtnbvOCjDarTNbhYUkRzIBY63feS/ZYKV6qarQ0ou275D05XdI3zDfRH8klB0dUtDfJoNknakeS+V3pPOZvw/wCd67axCW6iFWEhsFmkcEHGnpy43K0Gh6rrumILExKq4L6e25aHRngpGYFrdTII2W9RXP0zQR1EToZQS0+IO5zTuIUvfSDgmktCOCDzprBq1JTvLXC4v5LgMHD3HqUdmpSF6X0polj2lrmBwOYIUG0vyfscNqIlp9Fwu37wxHrQU1dzcinkNeD0sD6lItJ6ozM9A9jx7DYqPT6IkGGyUD2J18it7QuCaKRu4j1LNkszd/ig7llnbaaRlcEdhXMg0g/zg3xTqKtZfgd4/neg9BaB0hz9PDNvkja4jg4jyh3OuO5dIgEWOIIsQciOCrbkv062zqVzhmXw9d8ZGdoN3fadwVh86ghunuTeGUl9O/mXHEsI2o79W9vrUPr9QK5l7RtlH0HA3+y6xVwOmWs1CCiajQdSzp00oxv+TdmN9wE2+SSD80/f5h357lfpqFiahBQ7KCY5QyHsjcfcnLNDVRyp5v2T/grv59HPoKYZq1WnKml7229qcR6oV5/R3d7mD2uVwc+l59BU8eo1efzIHbIz4rezk7rTm2Idr/gFaXyhL8oQVozk1qjm+Ad7j+6nEfJjPvniHY1x+CsP5Qj5SOKCCM5L3b6pvdEf4k4ZyYM86pceyMD2uKmDq1ozIHetJ0rH6be4hBHGcmlNvnmPZsD3Lc3k4ot75j9to9jVImVJd0QT3fFOYqWd2TLdZc33ElBH6fUbR7MeaLvrvcfVey7dHSQQi0UUcf1Whp7yE/h0O89N4HU0E+s29i6NNQMZiG3PE4n/AG7kDSlpnOxOA9Z7AumxgAsFkEqiBKEIQCEIQCEIQCLIQgSyxLFmhA2lpwVz6rR18F2UhCCHVegmncuRU6vDgrEdECtD6QIqrKrVlpzaD3Lj1WqEZ8zwVxSUATWTRoVFIVOpY3bQ9a502p0gyx7le0mixwWk6KHBBRDdXamMhzGuBBBBbe4INwQRiFPtWdKaUlBYafnSwC7iRG63E3wJw3BToaKHAJ7T6KsMzY7gbeKCHVekqiNwbJA7atfyXMdbqJDs0jdKSEX5p9+Fsfh61OG6NaMgPBL8hHAIIKNITn9Hf3ln8SX5VUnKHxePcCpz8hHBKKMIIOJKs/mmD7ZP7qy2aw7ox94/BTgUgSilCCEClrT58Y+w7+JZt0dVnOUDsjHvJU2FMEopwghbdD1Bznf3NYPcto0HKc5ZPED2BTEU6yECCHDVu+b5T/mO+K2N1Xj3gntc4+0qXCFKIUEVZqtCPzTPuhOY9AxjJjR3BSLmkvNIOG3RDeA8As26JbwHgF2uaSiNBz4IHt6L3dhNx4FdKGU+d4hKI1mGKIzQgIQCEIQf/9k=" alt="">
								<a href="img/category/c4.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Sneaker for Sports</h6>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-deal">
						<div class="overlay"></div>
						<img class="img-fluid w-100" src="img/category/c5.jpg" alt="">
						<a href="img/category/c5.jpg" class="img-pop-up" target="_blank">
							<div class="deal-details">
								<h6 class="deal-title">Sneaker for Sports</h6>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End category Area -->

	<!-- start product Area -->
	<section class="owl-carousel active-product-area section_gap">
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>PRODUCTOS GAMERS</h1>
							<p>¡Encuentra Aquí Lo Que Buscas! Compra Fácil, Rápido y Seguro. Devoluciones Sin Costo. Envíos en todo Perú. Asesoría Telefónica. Paga Cuando Recibes. Paga en Cuotas</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
					<?php 
											require_once ("../Admin/DonShapra-Oficial/Private/Model/ModelCatalogo.php");
											$enlace=new ModeloCatalogo(); 

											$resultado=$enlace->mostrarCatalogo();
											while($fila=$resultado->fetch_array(MYSQLI_ASSOC))
											{

											$id=$fila['id'];
											$imagen=$fila['imagen'];
											$nombre=$fila['nombre'];
											$descripcion=$fila['descripcion'];
                                            $precioV=$fila['precio'];
                                       
				?>
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="../Admin/DonShapra-Oficial/Private/View/assets/images/catalogo/<?php echo $imagen; ?>" alt="">
							<div class="product-details">
								<h6><?php echo $nombre; ?></h6>
								<div class="price">
									<h6> $ <?php echo $precioV; ?></h6>
									<h6 class="l-through">$9000</h6>
								</div>
								<div class="prd-bottom">

									
								<div class="shoe single-item hvr-outline-out">
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart">
													<input type="hidden" name="add" value="1">
													<input type="hidden" name="shoe_item" value="<?php echo $nombre; ?>">
													<input type="hidden" name="amount" value="<?php echo $precioV; ?>">
													<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

													<a href="#" data-toggle="modal" data-target="#myModal1"></a>
												</form>

											</div>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a  href="mostrarcatalogo.php?id=<?php echo $id ?> " class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">ver mas</p>
									</a>
								</div>
							</div>
							
						</div>
					</div>
					<?php }  ?>
					<!-- single product -->
					
					<!-- single product -->
				
					<!-- single product -->
					
					<!-- single product -->
					
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Productos Tecnologicos</h1>
							<p>Tienda Online Don Shapra</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/Drones/dj1 phanton.jpg" alt="">
							<div class="product-details">
								<h6>Dj1 Phanton</h6>
								<div class="price">
									<h6>$675.00</h6>
									<h6 class="l-through">$700.00</h6>
								</div>
								<div class="prd-bottom">

									
									<div class="shoe single-item hvr-outline-out">
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart">
													<input type="hidden" name="add" value="1">
													<input type="hidden" name="shoe_item" value="Dj1 Phanton">
													<input type="hidden" name="amount" value="675.00">
													<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

													<a href="#" data-toggle="modal" data-target="#myModal1"></a>
												</form>

											</div>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/Drones/parrot.jpg" alt="">
							<div class="product-details">
								<h6>Dron Parrot</h6>
								<div class="price">
									<h6>$875.00</h6>
									<h6 class="l-through">$890.00</h6>
								</div>
								<div class="prd-bottom">

									
									<div class="shoe single-item hvr-outline-out">
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart">
													<input type="hidden" name="add" value="1">
													<input type="hidden" name="shoe_item" value="Dron Parrot">
													<input type="hidden" name="amount" value="875.00">
													<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

													<a href="#" data-toggle="modal" data-target="#myModal1"></a>
												</form>

											</div>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/Drones/DronGlory.jpg" alt="">
							<div class="product-details">
								<h6>DronGlory</h6>
								<div class="price">
									<h6>$1500.00</h6>
									<h6 class="l-through">$2000.00</h6>
								</div>
								<div class="prd-bottom">

									
									<div class="shoe single-item hvr-outline-out">
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart">
													<input type="hidden" name="add" value="1">
													<input type="hidden" name="shoe_item" value="DronGlory">
													<input type="hidden" name="amount" value="1500.00">
													<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

													<a href="#" data-toggle="modal" data-target="#myModal1"></a>
												</form>

											</div>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/Drones/p7.jpg" alt="">
							<div class="product-details">
								<h6>Cuadricoptero Dj1</h6>
								<div class="price">
									<h6>$5050.00</h6>
									<h6 class="l-through">$5100.00</h6>
								</div>
								<div class="prd-bottom">

									
									<div class="shoe single-item hvr-outline-out">
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart">
													<input type="hidden" name="add" value="1">
													<input type="hidden" name="shoe_item" value="Cuadricoptero Dj1">
													<input type="hidden" name="amount" value="$5050.00">
													<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

													<a href="#" data-toggle="modal" data-target="#myModal1"></a>
												</form>

											</div>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/Audifonos/airpods.jpg" alt="">
							<div class="product-details">
								<h6>Audifonos stile Airpods</h6>
								<div class="price">
									<h6>$150.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
								<div class="prd-bottom">

									
									<div class="shoe single-item hvr-outline-out">
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart">
													<input type="hidden" name="add" value="1">
													<input type="hidden" name="shoe_item" value="Audifonos stile Airpods">
													<input type="hidden" name="amount" value="150.00">
													<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

													<a href="#" data-toggle="modal" data-target="#myModal1"></a>
												</form>

											</div>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/Audifonos/p3.jpg" alt="">
							<div class="product-details">
								<h6>Audifono bluetooth Sansumg</h6>
								<div class="price">
									<h6>$150.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
								<div class="prd-bottom">

									
									<div class="shoe single-item hvr-outline-out">
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart">
													<input type="hidden" name="add" value="1">
													<input type="hidden" name="shoe_item" value="Audifono bluetooth Sansumg">
													<input type="hidden" name="amount" value="675.00">
													<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

													<a href="#" data-toggle="modal" data-target="#myModal1"></a>
												</form>

											</div>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/Audifonos/p4.jpg" alt="">
							<div class="product-details">
								<h6>Adaptador Bluetooth</h6>
								<div class="price">
									<h6>$50.00</h6>
									<h6 class="l-through">$2000.00</h6>
								</div>
								<div class="prd-bottom">

									
									<div class="shoe single-item hvr-outline-out">
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart">
													<input type="hidden" name="add" value="1">
													<input type="hidden" name="shoe_item" value="Adaptador Bluetooth">
													<input type="hidden" name="amount" value="50.00">
													<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

													<a href="#" data-toggle="modal" data-target="#myModal1"></a>
												</form>

											</div>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/Audifonos/p5.jpg" alt="">
							<div class="product-details">
								<h6>Audifono Bluetooth</h6>
								<div class="price">
									<h6>$150.00</h6>
									<h6 class="l-through">$200.00</h6>
								</div>
								<div class="prd-bottom">

									
									<div class="shoe single-item hvr-outline-out">
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart">
													<input type="hidden" name="add" value="1">
													<input type="hidden" name="shoe_item" value="Audifono Bluetooth">
													<input type="hidden" name="amount" value="$150.00">
													<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

													<a href="#" data-toggle="modal" data-target="#myModal1"></a>
												</form>

											</div>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end product Area -->

	<!-- Start exclusive deal Area -->
	<section class="exclusive-deal-area">
		<div class="container-fluid">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-6 no-padding exclusive-left">
					<div class="row clock_sec clockdiv" id="clockdiv">
						<div class="col-lg-12">
							<h1>Exclusive Hot Deal Ends Soon!</h1>
							<p>Who are in extremely love with eco friendly system.</p>
						</div>
						<div class="col-lg-12">
							<div class="row clock-wrap">
								<div class="col clockinner1 clockinner">
									<h1 class="days">150</h1>
									<span class="smalltext">Days</span>
								</div>
								<div class="col clockinner clockinner1">
									<h1 class="hours">23</h1>
									<span class="smalltext">Hours</span>
								</div>
								<div class="col clockinner clockinner1">
									<h1 class="minutes">47</h1>
									<span class="smalltext">Mins</span>
								</div>
								<div class="col clockinner clockinner1">
									<h1 class="seconds">59</h1>
									<span class="smalltext">Secs</span>
								</div>
							</div>
						</div>
					</div>
					<a href="" class="primary-btn">Shop Now</a>
				</div>
				<div class="col-lg-6 no-padding exclusive-right">
					<div class="active-exclusive-product-slider">
						<!-- single exclusive carousel -->
						<div class="single-exclusive-slider">
							<img class="img-fluid" src="img/product/e-p1.png" alt="">
							<div class="product-details">
								<div class="price">
									<h6>$150.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
								<h4>Dron volador falcon red
									</h4>
								<div class="add-bag d-flex align-items-center justify-content-center">
									<a class="add-btn" href=""><span class="ti-bag"></span></a>
									<span class="add-text text-uppercase">Agregar al carrito</span>
								</div>
							</div>
						</div>
						<!-- single exclusive carousel -->
						<div class="single-exclusive-slider">
							<img class="img-fluid" src="img/product/e-p1.png" alt="">
							<div class="product-details">
								<div class="price">
									<h6>$150.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
								<h4>addidas New Hammer sole
									for Sports person</h4>
								<div class="add-bag d-flex align-items-center justify-content-center">
									<a class="add-btn" href=""><span class="ti-bag"></span></a>
									<span class="add-text text-uppercase">Add to Bag</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End exclusive deal Area -->

	<!-- Start brand Area -->
	<section class="brand-area section_gap">
		<div class="container">
			<div class="row">
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/brand/1.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/brand/2.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/brand/3.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/brand/4.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/brand/5.png" alt="">
				</a>
			

			</div>
		</div>
	</section>
	<!-- End brand Area -->

	<!-- Start related-product Area -->
	
	<!-- End related-product Area -->

	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
							magna aliqua.
						</p>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p>Stay update with our latest</p>
						<div class="" id="mc_embed_signup">

							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="form-inline">

								<div class="d-flex flex-row">

									<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
									 required="" type="email">


									<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>

									<!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">Instragram Feed</h6>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="img/i1.jpg" alt=""></li>
							<li><img src="img/i2.jpg" alt=""></li>
							<li><img src="img/i3.jpg" alt=""></li>
							<li><img src="img/i4.jpg" alt=""></li>
							<li><img src="img/i5.jpg" alt=""></li>
							<li><img src="img/i6.jpg" alt=""></li>
							<li><img src="img/i7.jpg" alt=""></li>
							<li><img src="img/i8.jpg" alt=""></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="../Admin/DonShapra-oficial" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->
	<!-- Este es el evento para el carrito -->
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		shoe.render();

		shoe.cart.on('shoe_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<!-- /nav -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/demo1.js"></script>
	<!-- //nav -->
	<!--search-bar-->
	<script src="js/search.js"></script>
	<!--//search-bar-->
	<!-- price range (top products) -->
	<script src="js/jquery-ui.js"></script>
	<script>
		//<![CDATA[ 
		$(window).load(function () {
			$("#slider-range").slider({
				range: true,
				min: 0,
				max: 9000,
				values: [50, 6000],
				slide: function (event, ui) {
					$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
				}
			});
			$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

		}); //]]>
	</script>
	<!-- //price range (top products) -->

	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smoth-scrolling -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/countdown.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>