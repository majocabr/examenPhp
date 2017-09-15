<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset ="utf-8">
<title>Iniciar Sesión</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/admin.css" media="screen">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<aside>
<?php

if (isset($_SESSION['MiSession'])) {
echo "<p>Hola:(".$_SESSION['MiSession'].") [<a id='enlaceSalir' href='salir.php'>Salir</a>]</p>";
}
else {
session_destroy();
}

?>

<div class="iniciarSesion">
<h1>Iniciar Sesión</h1>
<img src="../images/usuario.png">
</div>

<form id="contact-form" action="verificarusuario.php" method= "post">
<div class="text-fieldsl">
<div class="float-input">
 <input name="usuario" id="usuario" type="text" placeholder="Usuario:">
<span><i class="fa fa-user"></i></span>
</div>
<div class="float-input">
<input name="contrasenia" id="contrasenia" type="password" placeholder="Contraseña:">
<span><i class="fa fa-lock"></i></span>
</div>
<input type="submit" id="submit_contact" class="main-button" value="Login">
                                                          
</div>
</form>
</aside>


</body>
</html>
