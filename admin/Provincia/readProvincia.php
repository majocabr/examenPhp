<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset ="utf-8">
<title>Tabla Provincia</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="../../css/tablas.css" rel="stylesheet" >
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
echo "<div class='navbar-header'><a class='navbar-brand'>Leer Provincia</a></div>";
echo "<ul class='nav navbar-nav'>";
echo "<li><a href='../readsupremo.php'>Menú</a></li>";
echo "<li><a href='createProvincia.php'>Nuevo</a></li>";
echo "</ul>";
echo "<ul class='nav navbar-nav navbar-right'>";
echo "<li><a href='#'>Hola:(" . $_SESSION ['MiSession'] . ")</a></li>";
echo "<li><a href='../salir.php''><span class='glyphicon glyphicon-log-in'></span> Salir</a></li>";
echo "</ul>";
echo "</div>";
echo "</nav>";

include_once("ProvinciaCollector.php");
$ProvinciaCollectorObj = new ProvinciaCollector();

echo "<div class='container'>";
echo "<div class='table-responsive'>"; 
echo "<table class='table'>"; 
echo "<thead>"; 
echo "<tr>"; 
echo "<th>Código</th>"; 
echo "<th>Nombre</th>";  
echo "</tr>"; 
echo "</thead>";

foreach ($ProvinciaCollectorObj->showProvincias() as $c){

echo "<tbody>"; 
echo "<tr>"; 
echo "<td>".$c->getIdProvincia()."</td>"; 
echo "<td>".$c->getNombre()."</td>";
echo "<td><a href='updateProvincia.php?id=".$c->getIdProvincia()."&nombre=".$c->getNombre()."'>Editar</a></td>"; 
echo "<td><a href='deleteProvincia.php?id=".$c->getIdProvincia()."&nombre=".$c->getNombre()."'>Eliminar</a></td>"; 

	// echo "<td><a href='deleteProvincia.php?id=".$c->getIdProvincia()."'>Resetear</a></td>"; 
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
