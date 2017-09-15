
<?php
session_start();
?>


<?php
$usuario=$_POST["usuario"];
$contrasenia=$_POST["contrasenia"];
$tipousuario="2";
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$email=$_POST["email"];


include_once("UsuarioCollector.php");
$UsuarioCollectorObj= new UsuarioCollector();
$UsuarioCollectorObj->insertUsuario($usuario, $contrasenia, $tipousuario);
include_once("Usuario.php");

$ObjUsuario=$UsuarioCollectorObj->consUsuario($usuario, $contrasenia);
$id_usuario=$ObjUsuario->getIdUsuario();
include_once("../Denunciante/DenuncianteCollector.php");
$DenuncianteCollectorObj= new DenuncianteCollector();
$DenuncianteCollectorObj->insertDenunciante($nombre, $apellido, $email, $id_usuario);

?>


<!doctype html>

<html lang="es" >

<head>
<title>TuVozCiudadana</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
<link rel="icon" href="../../favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="../../css/admin.css" media="screen">	
</head>
<body>


<center>

<div class="iniciarSesion">
<h1>¡FELICIDADES!</h1>
<img src="../../images/cliente-satisfecho.jpg">
</div>

<div class="mensajeDestroy">
<h3>Ya tienes tu cuenta en <br>"Tu Voz Ciudadana"</h3>
<h3>ahora procede a 
</div>

<a class="enlaceVolver" href="../../login.html"> Iniciar Sesión </a> </h4>
</center>

</body>

</html>
