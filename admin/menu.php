<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset ="utf-8">
<title> Readsupremo</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
#contenedor {
    display: table;
    border: 2px solid #000;
    width: 333px;
    text-align: center;
    margin: 0 auto;
}
#contenidos {
    display: table-row;
}
#columna1, #columna2, #columna3, #columna4, #columna5 {
    display: table-cell;
    border: 1px solid #000;
    vertical-align: middle;
    padding: 10px;
}
</style>

	</head>
<body>

<?php


echo "<nav class='navbar navbar-default'>";
echo "<div class='container-fluid'>";
echo "<div class='navbar-header'><a class='navbar-brand' >Tu voz Ciudadana</a></div>";
echo "<ul class='nav navbar-nav navbar-right'>";
echo "<li><a href='#'>Hola: (" . $_SESSION ['MiSession'] . ")</a></li>";
echo "<li><a href='#''><span class='glyphicon glyphicon-user'></span> $nombre</a></li>";
echo "<li><a href='salir.php''><span class='glyphicon glyphicon-log-in'></span> Salir</a></li>";

echo"<div id='tabla'>";   
echo "<div id='contenedor'>";
echo "<div id='contenidos'>";
echo "<div id='columna1'><a href='readusuario.php'>Usuario</a></div>";
echo "<div id='columna2'><a href='readArea.php'>Áreas</div>";
echo "<div id='columna3'><a href='readLote.php'>Lotes</div>";
echo "<div id='columna4'><a href='readCultivoLote.php'>Cultivos por Lotes</div>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";


?>




</body>
</html>
