<?php
session_start();
?>

<!doctype html>


<html lang="en" class="no-js">

<head>
	<title>TuVozCiudadana</title>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
	<meta charset="utf-8">

	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>

    <link href="https://www.fontify.me/wf/1e893ff92dc478e37f2bcf30d12d20bb" rel="stylesheet" type="text/css"><!--AlegreyaSans-Bold-->  
    <link href="https://www.fontify.me/wf/b5febf9e26c5f6fdc570288ff52b4026" rel="stylesheet" type="text/css"><!--AlegreyaSans-Light-->  
    <link href="https://www.fontify.me/wf/cf2e028488651a93a2818b5ef3dda2e2" rel="stylesheet" type="text/css"><!--AlegreyaSans-Thin--> 
    
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen">	
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/flexslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">
	
</head>
<body>

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<header>
			<div class="logo-box">
				<a href="index.html"><img alt="" src="images/logo1.png"></a>
			</div>
			<div class="search-box">
            <div></div>
            <form class="form-search" method="get" id="s" action="/">
            <div class="input-append">
            <input type="text" class="input-medium search-query" name="s" placeholder="Search" value="">
            <button type="button" class="btn btn-default btn-sm">
            <i class="fa fa-search" aria-hidden="true"></i> 
            </button>
            </div>
            </form>
            <div></div>
            </div>
			<a class="elemadded responsive-link" href="#">Menú</a>

			<div class="menu-box">
				<ul class="menu">
					<li><a href="index2.php"><span>Inicio</span></a></li>
					<li><a href="about2.php"><span>Quiénes Somos</span></a></li>
					<li><a class="active" href="#"><span>Categorías</span></a></li>
					<li><a href="formularioDenuncia2.php"><span>Nueva Denuncia</span></a></li>
					<li><a href="contact2.php"><span>Contáctenos</span></a></li>
					<li><a href="#"><span>
							<?php

							//$_SESSION['MiSession']= $_POST['usuario'];
							// $nombre= $_POST['usuario'];
							// $password= $_POST['contrasenia'];

							if (isset($_SESSION['MiSession'])) {
							echo "Bienvenido: (" . $_SESSION ['MiSession'] . ")";
							$usuario=$_SESSION['MiSession'];

							}else{
							echo '<script>window.location.href = "index.php";</script>';
							 
							}

							?>
					</span></a></li>
					<li><a href="admin/salir.php"><span>Cerrar Sesion</span></a></li>
				</ul>					
			</div>

			<div class="social-box">
				<ul class="social-icons">
					<li><a href="#" class="facebook" ><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" class="twitter" ><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" class="dribble" ><i class="fa fa-dribbble"></i></a></li>
					<li><a href="#" class="pinterest" ><i class="fa fa-pinterest"></i></a></li>
				</ul>
				<div class="info">
					<a href="#" class="mail">tuvozciudadana@hotmail.com<i class="fa fa-envelope-o"></i></a>
					<p class="phone">0916445776<i class="fa fa-phone"></i></p>
				</div>

			<p class="copyright">&#169; 2017 tuvozciudadana.com<br> Todos los derechos reservados</p>
			</div>
		</header>
		<!-- End Header -->

		<!-- content 
			================================================== -->
		<div id="content">
			<div class="inner-content">
				<div class="about-page">

					<div class="about-box">
						<div class="service-content">
							<div class="service-section clearfix">
								<h1>Categorías</h1>
								<img alt="" src="images/service.jpg">
								<p>En esta sección puedes consultar todas las denuncias de nuestro sitio por categorías. </p>	
								<p>Opina, comenta y denuncia cualquier inquietud para que nosotros le hagamos conocer a las autoridades acerca de tu problema y se pueda encontrar una eficiente solución.</div>
							<div class="border"></div>
							<div class="service-section offer-section">
								<h1>Nuestras categorías</h1>
								<div class="our-services">
									<div class="row">
										<div class="col-md-3">
											<div class="service-item">
												<i class="fa fa-bullhorn" aria-hidden="true"></i>
												<div class="serv-border"></div>
													<a href="blog.html"><h3> Robos </h3></a>
											</div>
										</div>

										<div class="col-md-3">
											<div class="service-item">
												<i class="fa fa-wheelchair" aria-hidden="true"></i>
												<div class="serv-border"></div>
												<h3>Accidentes</h3>
											</div>
										</div>

										<div class="col-md-3">
											<div class="service-item">
												<i class="fa fa-users"></i>
												<div class="serv-border"></div>
												<h3>Malos servicios</h3>
											</div>
										</div>

										<div class="col-md-3">
											<div class="service-item">
												<i class="fa fa-ambulance" aria-hidden="true"></i>
												<div class="serv-border"></div>
												<h3>Calles destruidas</h3>
											</div>
										</div>
									</div>
								</div>	
							</div>
							<div class="border"></div>
							<!-- Tabs -->
							<div class="tabs service-section last-section">		
								<h1>¿Por qué usar el servicio de tuvozciudadana.com?</h1>		
								<div class="tabs-widget clearfix">
						    		<ul class="tab-links clearfix">
						    			<li class="active"><a href="#graphic">Velocidad de Publicación</a></li>
						    			<li class=""><a href="#visual">Fácil Publicación</a></li>
						    			<li class=""><a href="#econom">Seguimiento de noticias</a></li>
						    		</ul>

						    		<div id="graphic" style="display: block;">
						    			<ul>
						    				<li>
						    					<p>Las técnicas de optimización del rendimiento web, en inglés Web Performance Optimization (WPO), proponen cambios de mejora para reducir el tiempo de espera de los usuarios cuando visualizan una página web.</p>
						    					<p>Para medir y realizar un test de velocidad web, se usa una herramienta de Google denominada PageSpeeds Insights.<br>
                                                Para medir el tiempo de carga web, se usa otra herramienta muy conocida denominada Pingdom.</p>		    	
						    				</li>
						    			</ul>
						    		</div>

						    		<div id="visual" style="display: none;">
						    			<ul>
						    				<li>
						    					<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate. </p>

						    					<p>Morbi accumsan ipsu m velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class</p>

						    			
						    				</li>
						    			</ul>
						    		</div>

						    		<div id="econom" style="display: none;">
						    			<ul>
						    				<li>
						    					<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate. </p>

						    					<p>Morbi accumsan ipsu m velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class</p>

						    			
						    				</li>
						    			</ul>
						    		</div>
								</div>
							</div>
							<!-- End Tabs -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End content -->

	</div>
	<!-- End Container -->

	<div class="preloader">
		<img alt="" src="images/preloader.gif">
	</div>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
	<script type="text/javascript" src="js/jquery.quovolver.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>


</body>

</html>
