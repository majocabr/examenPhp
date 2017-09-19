<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset ="utf-8">
<title>Tabla Ciudad</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="../css/tablas.css" rel="stylesheet" >
</head>
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
echo "<div class='navbar-header'><a class='navbar-brand'>Leer Ciudad</a></div>";
echo "<ul class='nav navbar-nav'>";
echo "<li><a href='../readsupremo.php'>Menú</a></li>";
echo "<li><a href='createCiudad.php'>Nuevo</a></li>";
echo "</ul>";
echo "<ul class='nav navbar-nav navbar-right'>";
echo "<li><a href='#'>Hola:(" . $_SESSION ['MiSession'] . ")</a></li>";
echo "<li><a href='../salir.php''><span class='glyphicon glyphicon-log-in'></span> Salir</a></li>";
echo "</ul>";
echo "</div>";
echo "</nav>";

include_once("CiudadCollector.php");
$CiudadCollectorObj = new CiudadCollector();

echo "<div class='container'>";
echo "<div class='table-responsive'>"; 
echo "<table class='table'>"; 
echo "<thead>"; 
echo "<tr>"; 
echo "<th>Código</th>"; 
echo "<th>Nombre</th>";  
echo "<th>Provincia</th>"; 
echo "</tr>"; 
echo "</thead>";

foreach ($CiudadCollectorObj->showCiudades() as $c){

echo "<tbody>"; 
echo "<tr>"; 
echo "<td>".$c->getIdCiudad()."</td>";
echo "<td>".$c->getNombre()."</td>";
echo "<td>".$c->getIdProvincia()."</td>";

echo "<td><a href='updateCiudad.php?id=".$c->getIdCiudad()."&nombre=".$c->getNombre()."&idprovincia=".$c->getIdProvincia()."'>Editar</a></td>"; 
echo "<td><a href='deleteCiudad.php?id=".$c->getIdCiudad()."&nombre=".$c->getNombre()."'>Eliminar</a></td>"; 
echo "</tr>"; 
}

echo "</tbody>";
echo "</table>";
echo "</div>";
echo "</div>";
?>
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
