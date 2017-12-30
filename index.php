<!DOCTYPE html>
<html lang="es">
	<?php include('head.php'); ?>

<body id="page-top">
	<!-- Navigation -->
	<?php include('nav.php'); ?>


	<!-- Header -->
	<header class="jumbotron paral paralsec d-flex flex-column justify-content-center shadow-text">
		<h1 class="text-center display-1 wow bounceInUp " data-wow-delay=".2s" style="font-family: AgencyFb;">EVENTOS</h1>
		<p class="lead text-center display-4 mb-4 wow bounceInUp sombra" data-wow-delay=".4s" style="font-family: Coolvetica;">que</p>
		<p class="lead text-center display-4 mt-3 wow bounceInUp sombra" data-wow-delay=".6s" style="font-family: AlKisah;" >Emocionan</p>
	</header>

	<!-- Section Servicios -->
	<section class="content-servicios" id="services">
		<div class="content">
			<div class="row justify-content-center text-center ">
				<div class="mb-2">
					<p class="root_title">Nuestros Servicios</p>
				</div>
			</div>
			<div class="row pt-2 services_section">
				<div class="col-lg-6 col-md-6 col-xs hero-1 wow fadeIn" data-wow-delay=".2s">
					<img src="assets/img/Thumbnail/services_image-650x350.jpg" alt="services_image" class="img-fluid">
					<div class="hipervin"><a href="s-ic.php"><img src="assets/img/transp.png" width="100%" height="100%" alt=""></a></div>
				</div>
				<div class="col-lg-6 col-md-6 col-xs hero-2 wow fadeIn" data-wow-delay=".4s">
					<img src="assets/img/Thumbnail/services_integration-650x350.jpg" alt="services_integration" class="img-fluid">
					<div class="hipervin"><a href="s-in.php"><img src="assets/img/transp.png" width="100%" height="100%" alt=""></a></div>
				</div>
				<div class="col-lg-6 col-md-6 col-xs hero-3 wow fadeIn" data-wow-delay=".6s">
					<img src="assets/img/Thumbnail/services_building-650x350.jpg" alt="services_building" class="img-fluid">
					<div class="hipervin"><a href="s-bu.php"><img src="assets/img/transp.png" width="100%" height="100%" alt=""></a></div>
				</div>
				<div class="col-lg-6 col-md-6 col-xs hero-4 wow fadeIn" data-wow-delay=".8s">
					<img src="assets/img/Thumbnail/services_sports-650x350.jpg" alt="services_sports" class="img-fluid">
					<div class="hipervin"><a href="s-sp.php"><img src="assets/img/transp.png" width="100%" height="100%" alt=""></a></div>
				</div>
				<div class="col-lg-6 col-md-6 col-xs hero-5 wow fadeIn" data-wow-delay="1s">
					<img src="assets/img/Thumbnail/services_talents-650x350.jpg" alt="services_talents" class="img-fluid">
					<div class="hipervin"><a href="s-ta.php"><img src="assets/img/transp.png" width="100%" height="100%" alt=""></a></div>
				</div>
				<div class="col-lg-6 col-md-6 col-xs hero-6 wow fadeIn" data-wow-delay="1.2s">
					<img src="assets/img/Thumbnail/services_travel-650x350.jpg" alt="services_travel" class="img-fluid">
					<div class="hipervin"><a href="s-tr.php"><img src="assets/img/transp.png" width="100%" height="100%" alt=""></a></div>
				</div>
			</div>
		</div>
	</section>
	<!-- Section Nosotros -->
	<section class="content-about" id="about">
	<!-- Desktop Team Section -->
		<div class=" tm-section d-none d-sm-flex">
			<div class="tm-item">
			<p class="tm-txt">"Trabajamos con personas con ideas excepcionales capaces de marcar tendencias. Nuestros colaboradores producen eventos que emocionan, inspiran y crean soluciones efectivas de comunicación."</p>
			<h3 class="tm-nom text-aracelli">Aracelli Ulloa</h3>
			<h5 class="tm-titul">Gerente General</h5>
			</div>
		</div>
	<!-- Mobile Team Seaction -->
		<div class="row tm-section-mb d-sm-none d-flex">
			<div class="tm-item">
			<p class="tm-txt">"Trabajamos con personas con ideas excepcionales capaces de marcar tendencias. Nuestros colaboradores producen eventos que emocionan, inspiran y crean soluciones efectivas de comunicación."</p>
			<h3 class="tm-nom text-aracelli">Aracelli Ulloa</h3>
			<h5 class="tm-titul">Gerente General</h5>
			</div>
		</div>
	</section>

	<!-- Section Clientes -->
	<section class="content-clients">
		<div class="row justify-content-center text-center">
			<div class="pt-5">
			<p class="mb-0 root_title">Nuestros Clientes</p>
			</div>
		</div>
		<div class="row d-none d-sm-flex justify-content-center">
			<div id="carouselCustomers" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner text-center">
					<div class="carousel-item active">
						<img class="img img-fluid w-90" src="assets/img/Slider/Desktop/slide_1.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="img img-fluid w-90" src="assets/img/Slider/Desktop/slide_2.jpg" alt="Second slide">
					</div>
				</div>
			</div>
		</div>
		<div class="row d-sm-none d-flex justify-content-center">
			<div id="carouselCustomersMobile" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active slider-center">
						<img class="img img-fluid w-75" src="assets/img/Slider/Mobile/slide_1.jpg" alt="First slide">
					</div>
					<div class="carousel-item slider-center">
						<img class="img img-fluid w-75" src="assets/img/Slider/Mobile/slide_2.jpg" alt="Second slide">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section Contactos -->
	<section class="content-contact"  id="contact">
		<div class="panel bg-dark-blue">
			<form action="" class="col-12 d-flex flex-column align-items-center justify-content-center">
				<legend class="mb-1 mt-3 text-center contact-title">CONTÁCTANOS</legend>
				<div class="input-group mb-3">
					<span class="input-group-addon"><i class="fa fa-user-o fa-fw"></i></span>
					<input type="email" id="name" class="form-control" placeholder="Nombres" required>
				</div>
				<div class="input-group mb-3">
					<span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
					<input type="text" id="mail" class="form-control" placeholder="Correo Electronico" required>
				</div>
				<div class="input-group mb-3">
					<span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
					<input type="text" id="phone" class="form-control" placeholder="Telefono" required>
				</div>
				<div class="input-group textarea mb-3">
					<textarea name="message" id="message" cols="42" rows="2" placeholder="Deja tu mensaje" required></textarea>
				</div>

				<div class="input-group btn-send mb-3">
					<span class="input-group-addon"><i class="fa fa-rocket fa-fw"></i></span>
					<input type="submit" value ="Enviar Consulta" class="form-control btn-primary btn-item-send justify-content-center">
				</div>
			</form>
		</div>
		<div class="panel bg-gradient panel-movil">
			<div class="panel-2 panel-b d-none d-sm-flex">
				<div class="text-center contact-frase">
					<p class="pb-2">DISEÑAMOS EVENTOS QUE <br>
					<span class="span-blue">CONECTAN, </span><br>
					<span class="span-dark-yellow">INSPIRAN, </span><br>
					<span class="span-dark-purple">GENERAN </span><br>RESULTADOS. </p>
				</div>
			</div>
			<div class="panel-2">
				<div class="">
					<!-- <div class="title-contact"><h4>INFORMACIÓN</h4></div> -->
				</div>
				<div class="">
					<div class="panel-h">
						<div>
							<h6><i class="fa fa-id-card" aria-hidden="true"></i></h6>
						</div>
						<div>
							<h6>informes@eventradeperu.com</h6>
						</div>
					</div>
					<div class="panel-h">
						<div>
							<h6><i class="fa fa-id-card" aria-hidden="true"></i></h6>
						</div>
						<div>
							<h6>ventas@eventradeperu.com</h6>
						</div>
					</div>
					<div class="panel-h">
						<div>
							<h6><i class="fa fa-phone-square" aria-hidden="true"></i></h6>
						</div>
						<div>
							<h6>012712328 - 012663801 - 993477430</h6>
						</div>
					</div>
					<div class="panel-h">
						<div>
							<h6><i class="fa fa-location-arrow" aria-hidden="true"></i></h6>
						</div>
						<div>
							<h6>Calle Alipio Ponce 115 Surco</h6>
						</div>
					</div>
				</div>
			</div>
		</div>s
	</section>
<?php include('js.php'); ?>
</body>
</html>