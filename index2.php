<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en" class="no-js">


<head>
	<title>Denunciaya</title>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
	<meta charset="utf-8">

	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen">	
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/flexslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap-layout.css" media="screen"> -->
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
			<div class="search-box" >
            <form class="form-search" method="get" id="s" action="/">
            <div class="input-append">
            <input type="text" class="input-medium search-query" name="s" placeholder="Search" value="">
            <button type="button" class="btn btn-default btn-sm">
            <i class="fa fa-search" aria-hidden="true"></i> 
            </button>
            </div>
            </form>
            </div>
			<a class="elemadded responsive-link" href="#">Menu</a>

			<div class="menu-box">
				<ul class="menu">
					<li><a class="active" href="#"><span>Inicio</span></a></li>
					<li><a href="about2.php"><span>Quienes Somos</span></a></li>
					<li><a href="services2.php"><span>Categorias</span></a></li>
					
				<!--	<li><a href="single-post.html"><span>Single Post</span></a></li> -->
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
					<a href="#" class="mail">denunciasya@hotmail.com<i class="fa fa-envelope-o"></i></a>
					<p class="phone">+38164 123 456<i class="fa fa-phone"></i></p>
				</div>

				<p class="copyright">&#169; 2017 denunciaya.com<br> Todos los derechos reservados</p>
			</div>
		</header>
		<!-- End Header -->

		<!-- content 
			================================================== -->
		<div id="content">
			<div class="inner-content">
				<div class="portfolio-page">
					<div class="portfolio-box">

						<div class="project-post">
							<div class="view view-first">
			                    <img class="imgDenu" src="images/denu11.jpg" alt="" />
			                    <div class="mask">
			                    	<div class="top-post">
				                        <h2>Guayaquil: Los rostros de Nueva York y Calcuta en una sola ciudad</h2>
				                        <div class="post-border"></div>
				                        <p>Guayaquil, 2 diciembre 2013</p>
				                    </div>
				                    <div class="bottom-post">
				                    	<a class="zoom" href="images/denu11.jpg"><i class="fa fa-search"></i></a>
				                    	<a href="denuncia5.html"><i class="fa fa-arrow-right"></i></a>
				                    </div>
			                    </div>
			                </div>
						</div>

						<div class="project-post">
							<div class="view view-first">
			                    <img class="imgDenu" src="images/denu2.jpg" alt="" />
			                    <div class="mask">
			                    	<div class="top-post">
				                        <h2>Creative Wallpaper</h2>
				                        <div class="post-border"></div>
				                        <p>nature, photography</p>
				                    </div>
				                    <div class="bottom-post">
				                    	<a class="zoom" href="images/denu2.jpg"><i class="fa fa-search"></i></a>
				                    	<a href="denuncia.html"><i class="fa fa-arrow-right"></i></a>
				                    </div>
			                    </div>
			                </div>
						</div>

						<div class="project-post">
							<div class="view view-first">
			                    <img class="imgDenu" src="images/denu3.jpg" alt="" />
			                    <div class="mask">
			                    	<div class="top-post">
				                        <h2>Barrio El Blanqueado, urgen contenedores y recolección.</h2>
				                        <div class="post-border"></div>
				                        <p>Quito, 28 de junio 2017</p>
				                    </div>
				                    <div class="bottom-post">
				                    	<a class="zoom" href="images/denu3.jpg"><i class="fa fa-search"></i></a>
				                    	<a href="denuncia3.html"><i class="fa fa-arrow-right"></i></a>
				                    </div>
			                    </div>
			                </div>
						</div>

						<div class="project-post">
							<div class="view view-first">
			                    <img class="imgDenu" src="images/denu5.jpg" alt="" />
			                    <div class="mask">
			                    	<div class="top-post">
				                        <h2>Creative Wallpaper</h2>
				                        <div class="post-border"></div>
				                        <p>nature, photography</p>
				                    </div>
				                    <div class="bottom-post">
				                    	<a class="zoom" href="images/denu5.jpg"><i class="fa fa-search"></i></a>
				                    	<a href="denuncia1.html"><i class="fa fa-arrow-right"></i></a>
				                    </div>
			                    </div>
			                </div>
						</div>

						<div class="project-post">
							<div class="view view-first">
			                    <img class="imgDenu" src="images/denu7.jpg" alt="" />
			                    <div class="mask">
			                    	<div class="top-post">
				                        <h2>Vecinos de Pascuales denuncian que el 90% no tiene alcantarillado.</h2>
				                        <div class="post-border"></div>
				                        <p>Guayaquil, 26 junio 2015</p>
				                    </div>
				                    <div class="bottom-post">
				                    	<a class="zoom" href="images/denu7.jpg"><i class="fa fa-search"></i></a>
				                    	<a href="denuncia4.html"><i class="fa fa-arrow-right"></i></a>
				                    </div>
			                    </div>
			                </div>
						</div>

						<div class="project-post">
							<div class="view view-first">
			                    <img class="imgDenu" src="images/denu6.jpg" alt="" />
			                    <div class="mask">
			                    	<div class="top-post">
				                        <h2>Creative Wallpaper</h2>
				                        <div class="post-border"></div>
				                        <p>nature, photography</p>
				                    </div>
				                    <div class="bottom-post">
				                    	<!-- aki pones la imagen hd -->
				                    	<a class="zoom" href="images/denu6.jpg"><i class="fa fa-search"></i></a>
				                    	<a href="denuncia2.html"><i class="fa fa-arrow-right"></i></a>
				                    </div>
			                    </div>
			                </div>
						</div>

						<div class="project-post">
							<div class="view view-first">
			                    <img class="imgDenu" src="images/denu4.jpg" alt="" />
			                    <div class="mask">
			                    	<div class="top-post">
				                        <h2>Ordenanza no logra frenar mala disposición de basura en barrios de Guayaquil</h2>
				                        <div class="post-border"></div>
				                        <p>Guayaquil, 30 junio 2017</p>
				                    </div>
				                    <div class="bottom-post">
				                    		<!-- aki pones la imagen hd -->
				                    	<a class="zoom" href="images/denu4.jpg"><i class="fa fa-search"></i></a>
				                    	<a href="denuncia.html"><i class="fa fa-arrow-right"></i></a>
				                    </div>
			                    </div>
			                </div>
						</div>

						<div class="project-post">
							<div class="view view-first">
			                    <img class="imgDenu" src="images/denu14.jpg" alt="" />
			                    <div class="mask">
			                    	<div class="top-post">
				                        <h2>Municipio rehabilita el alcantarillado pluvial.</h2>
				                        <div class="post-border"></div>
				                        <p>Guayaquil, 13 mayo 2017</p>
				                    </div>
				                    <div class="bottom-post">
				                    	<a class="zoom" href="images/denu14.jpg"><i class="fa fa-search"></i></a>
				                    	<a href="denuncia5.html"><i class="fa fa-arrow-right"></i></a>
				                    </div>
			                    </div>
			                </div>
						</div>

						<div class="project-post">
							<div class="view view-first">
			                    <img class="imgDenu" src="images/denu9.jpg" alt="" />
			                    <div class="mask">
			                    	<div class="top-post">
				                        <h2>Profesores y estudiantes de la Escuela de Bellas Artes denuncian cortes de luz.</h2>
				                        <div class="post-border"></div>
				                        <p>Guayaquil, 29 junio 2016</p>
				                    </div>
				                    <div class="bottom-post">
				                    	<a class="zoom" href="images/denu9.jpg"><i class="fa fa-search"></i></a>
				                    	<a href="denuncia3.html"><i class="fa fa-arrow-right"></i></a>
				                    </div>
			                    </div>
			                </div>
						</div>

						<div class="project-post">
							<div class="view view-first">
			                    <img class="imgDenu" src="images/denu10.jpg" alt=""  />
			                    <div class="mask">
			                    	<div class="top-post">
				                        <h2>Puná, la isla más grande de Guayaquil, tiene problemas sanitarios por falta de servicio.</h2>
				                        <div class="post-border"></div>
				                        <p>Guayaquil, 19 noviembre 2014</p>
				                    </div>
				                    <div class="bottom-post">
				                    	<a class="zoom" href="images/denu10.jpg"><i class="fa fa-search"></i></a>
				                    	<a href="denuncia2.html"><i class="fa fa-arrow-right"></i></a>
				                    </div>
			                    </div>
			                </div>
						</div>

						<div class="project-post">
							<div class="view view-first">
			                    <img class="imgDenu" src="images/denu13.jpg" alt=""  />
			                    <div class="mask">
			                    	<div class="top-post">
				                        <h2>Las anegaciones afectan a Urbanor y a Urdenor 2</h2>
				                        <div class="post-border"></div>
				                        <p>Guayaquil, 15 abril 2016</p>
				                    </div>
				                    <div class="bottom-post">
				                    	<a class="zoom" href="images/denu13.jpg"><i class="fa fa-search"></i></a>
				                    	<a href="denuncia1.html"><i class="fa fa-arrow-right"></i></a>
				                    </div>
			                    </div>
			                </div>
						</div>

						<div class="project-post">
							<div class="view view-first">
			                    <img class="imgDenu" src="images/denu12.jpg" alt=""  />
			                    <div class="mask">
			                    	<div class="top-post">
				                        <h2>Municipio no repara vías de 4 barrios de Guayaquil.</h2>
				                        <div class="post-border"></div>
				                        <p>Guayaquil, 10 noviembre 2015</p>
				                    </div>
				                    <div class="bottom-post">
				                    	<a class="zoom" href="images/denu12.jpg"><i class="fa fa-search"></i></a>
				                    	<a href="denuncia3.html"><i class="fa fa-arrow-right"></i></a>
				                    </div>
			                    </div>
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
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
  	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
    <!-- <script type="text/javascript" src=".js/bootstrap-layout.js"></script> -->


</body>

</html>