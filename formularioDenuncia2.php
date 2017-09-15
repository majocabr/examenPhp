<?php
session_start();
?>

<!doctype html>


<html lang="en" class="no-js">


<head>
	<title>TuVozCiudadana</title>	
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
<header class="cabeceraForm">

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
       </div>

	<div class="info">
	<a href="#" class="mail">tuvozciudadana@hotmail.com<i class="fa fa-envelope-o"></i></a>
	<p class="phone">0921505061<i class="fa fa-phone"></i></p>
	</div>

	<p class="copyright">&#169; 2017 tuvozciudadana.com<br> Todos los derechos reservados</p>
	
</header>
<!-- End Header -->


<!-- content ================================================== -->

<div id="content">

<div class="inner-content">

<div class="contact-page">

<div id="fondo-contact" style="background-image:url(images/contacto.jpg); width: 100%; height:100%; position: absolute;top: 0;left: 0;">
</div>

<div class="contact-box">
	<div class="contact-info">
             <h1>Formulario de Denuncia</h1>
             <p>Estaremos encantados de responder su denuncia.</p>
        </div>          
           
		
         <form id="contact-form">           

                <div class="text-fields">

		<div class="float-input">
		<input name="name" id="name" type="text" placeholder="Titulo">
		<span><i class="fa fa-user"></i></span>
	        </div>              

                <div class="float-input">                   
                 <input type="text" name="Ciudad" placeholder="Ciudad">  
                 <span><i class="fa fa-home fa-fw"></i></span>                 
                </div>

               <div class="float-input">                    
                 <input type="text" name="problema" placeholder="Parroquia">
                 <span><i class="fa fa-pencil fa-fw"></i></span>  
                </div>

                <div class="float-input">                    
                 <input type="text" name="Direccion" placeholder="Dirección">
                 <span><i class="fa fa-book fa-fw"></i></span>                    
                </div> 
     </div>


<div class="btn-group open">
  <a class="btn btn-primary" href="#"><i class="fa fa-check-square"></i>Categoría</a>
  <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
    <span class="fa fa-caret-down" title="Toggle dropdown menu"></span>
  </a>
  <ul class="dropdown-menu">
    <li><a href="#"><i class="fa fa-pencil fa-fw"></i>Robo</a></li>
    <li><a href="#"><i class="fa fa-trash-o fa-fw"></i>Servicios</a></li>
    <li><a href="#"><i class="fa fa-ban fa-fw"></i>Transito</a></li>
    <li><a href="#"><i class="fa fa-ban fa-fw"></i>Animales</a></li>    
  </ul>
</div>

     <div class="submit-area espacio">
      <textarea name="comment" id="comment" placeholder="Ingresa tu denuncia"></textarea>

<div class="form-group">
<label for='inputName' class='control-label col-xs-2'>Imagen:</label>
<div class='col-xs-10'>

<!-- <?php 
// $img = $_GET['imagen'];
 echo "<img src='../perfil/$img' width='50' height='50' />"?> -->
  <input id="imagen" name="imagen" size="30" type="file">


</div>
                
            </div>

	<input type="submit" id="submit_contact" class="main-button" value="Enviar">        
	<div id="msg" class="message"></div>
     </div>
            
        </form> 
  </div>

  </div>
 </div>		
</div>
</div>	
			
	
<!-- End content -->

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
</body>

</html>
