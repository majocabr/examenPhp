<?php
session_start();
?>

<!doctype html>


<html lang="es" class="no-js">

<head>
	<title>Denunciaya</title>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
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
<!-- Header ================================================== -->
<header>
	<div class="logo-box">
	<a class="logo" href="index.html"><img alt="" src="images/logo1.png"></a>
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

	<a class="elemadded responsive-link" href="#">Menu</a>

	<div class="menu-box">
	   <ul class="menu">
	       <li><a  href="index2.php"><span>Inicio</span></a></li>
	       <li><a class="active" href="about2.php"><span>Quienes Somos</span></a></li>
	       <li><a href="services2.php"><span>Categorias</span></a></li>				
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
		<a href="#" class="mail">youremail@domain.com<i class="fa fa-envelope-o"></i></a>
		<p class="phone">+38164 123 456<i class="fa fa-phone"></i></p>
	</div>
	<p class="copyright">&#169; 2017 denunciaya.com<br> Todos los derechos reservados</p>
	</div>

</header>
<!-- End Header -->

<!-- content ================================================== -->
<div id="content">
<div class="inner-content">
<div class="about-page">
<div class="about-box">
	
<div class="about-content">

	<div class="about-section">
	<img alt="" src="images/imgPortada.jpg">
	<h1>Acerca de nosotros</h1>
	<p>El sitio web tuvozciudadana.com es un servicio a la comunidad en donde se realiza todo tipo de denuncia por parte del denunicante que espera ser atendida lo más pronto posible.</p>								
        </div>
	
   <div class="about-section last-section">
	<h1>Conoce a nuestro equipo</h1>
<div class="team-members">

	<div class="row">

	<div class="col-md-6">
	<div class="team-post">
	<img alt="" src="images/integ2.jpg">
        <div class="team-hover">
	<div class="team-data">
	<h3>Daniel Vinces</h3>
	<span>Reportero</span>
	</div>
      </div>

   </div>											
</div>

<div class="col-md-6">
	<div class="team-post">
         <img alt="" src="images/integ4.jpg">
	 <div class="team-hover">
	<div class="team-data">
   <h3>María Cabrera</h3>
   <span>Reportera</span>
</div>
</div>
</div>											
</div>

</div>
									
<div class="row">

<div class="col-md-6">
<div class="team-post">
<img alt="" src="images/integ3.jpg">
<div class="team-hover">
<div class="team-data">
<h3>César Arteaga</h3><span>Investigador</span>
</div>
</div>
</div>											
</div>
									
<div class="col-md-6">
<div class="team-post"><img alt="" src="images/integ1.jpg">
<div class="team-hover">
<div class="team-data">
<h3>Olga Tohabanda</h3>
<span>Web Developer</span>
</div>
</div>
</div>											
</div>

</div>
									
</div>							
</div>
</div>

<div class="sidebar">

<div class="skills-progress">
<h1>Nuestras habilidades</h1>
<p>Atención inmediata<span>71%</span></p>

<div class="meter nostrips frontend">
<span style="width: 71%"></span>
</div>

<p>Solución inmediata<span>85%</span></p>

<div class="meter nostrips photoshop">
<span style="width: 85%"></span>
</div>

<p>Directo al lugar de los hechos<span>76%</span></p>

<div class="meter nostrips wp">
<span style="width: 76%"></span>
</div>

<p>Denuncias atendidas<span>53%</span></p>

<div class="meter nostrips plugins">
<span style="width: 53%"></span>
</div>

</div>

<div class="testimonial">
<h1>Testimonios de clientes</h1>
<ul>
<li>

<div class="client-test"><img alt="" src="images/cliente2.jpg">
<h3>Jennifer Mora</h3>
</div>

<p>Estoy muy agradecida por atender a mi denuncia lo más pronto posible, gracias por valorar mi queja y darme la solución.</p>
</li>
<li>

<div class="client-test">
<img alt="" src="images/cliente.jpg">
	<h3>Magdalena Ponce</h3>
</div>

<p>Estoy muy agradecida por atender a mi denuncia lo más pronto posible, gracias por valorar mi queja y darme la solución. </p>
</li>
</ul>
</div>

<div class="services">
<h1>Servicios</h1>
<ul>
<li><a href="#">Servicio al cliente</a></li>
<li><a href="#">Servicio a la comunidad</a></li>
<li><a href="#">Llamadas de emergencia</a></li>
<li><a href="#">Servicio a noticieros</a></li>
<li><a href="#">Casos insólitos</a></li>
<li><a href="#">Casos familiares</a></li>
</ul>
</div>

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
