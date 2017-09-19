<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset ="utf-8">
<title>Tabla Provincia </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="../../css/tablas.css" rel="stylesheet" ></head>
<body>
<header>

</header>
<?php
if (isset($_SESSION['MiSession'])){
?>

<aside>
<?php

 echo "<nav class='navbar navbar-default'>";
 echo "<div class='container-fluid'>";
 echo "<div class='navbar-header'><a class='navbar-brand' >Crear Provincia</a></div>";
 echo " <ul class='nav navbar-nav'>";
 echo "<li><a href='../readsupremo.php'>Menú</a></li>";
 echo "<li><a href='createProvincia.php'>Nuevo</a></li>";
 echo "</ul>";
 echo " <ul class='nav navbar-nav navbar-right'>";
 echo "<li><a href='#'>Hola: (" . $_SESSION ['MiSession'] . ")</a></li>";
 echo "<li><a href='../salir.php''><span class='glyphicon glyphicon-log-in'></span> Salir</a></li>";
 echo "</ul>";
 echo "</div>";
 echo "</nav>";
 echo "<form method= 'POST' class='form-horizontal' action= 'nuevaProvincia.php' id='provincia' title='Provincia' >";
     echo "<div class='form-group'>";
         echo "<label for='inputName' class='control-label col-xs-2'>Nombre:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name= 'nombre' type='text' id= 'nombre' class='form-control' placeholder='Nombre' required>";
         echo "</div>";
     echo "</div>";
     echo "<div class='form-group'>";
         echo "<div class='col-xs-offset-2 col-xs-10'>";
             echo "<button type='submit' class='btn btn-primary'>Grabar</button>";            
         echo "</div>";
     echo "</div>";
echo "</form>";
 
?>

<div class="text-fieldsl">
  <a href='readProvincia.php'>Regresar</a>                                          
</div>



</aside>
<?php
}   
    else {
echo "<center>";
    echo "<h1>PERMISO DENEGADO</h1>";
    echo "<br>";
    echo"<a href='../index.php'><h1>Iniciar Sesión</h1></a>";
echo "</center>";
    }
?>
</body>
</html>
