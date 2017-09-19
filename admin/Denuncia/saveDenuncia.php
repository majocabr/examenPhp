<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Denuncia Registrada </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link href="../../css/tablas.css" rel="stylesheet" >
	</head>
<body>
<?php
if (isset($_SESSION['MiSession'])){
    ?>
<header>

</header>
<section>
</section>
<section>

</section>
<aside>
<?php

 echo "<nav class='navbar navbar-default'>";
    echo "<div class='container-fluid'>";
    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Denuncia</a></div>";
    echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='../readsupremo.php'>Menú</a></li>";
			echo "<li><a href='newDenuncia.php'>Nuevo</a></li>";
		echo "</ul>";
    echo " <ul class='nav navbar-nav navbar-right'>";
    echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['MiSession'] . ")</a></li>";
    echo "<li><a href='../salir.php''><span class='glyphicon glyphicon-log-in'></span> Salir</a></li>";
    echo "</ul>";
    echo "</div>";
    echo "</nav>";




$titulo = $_POST["titulo"];
$descripcion = $_POST["descripcion"];
$fecha_publicacion = $_POST["fecha_publicacion"];
$fecha_ejecucion = $_POST["fecha_ejecucion"];
$id_denunciante=$_POST["id_denunciante"];
$id_ciudad=$_POST["id_ciudad"];
$id_parroquia=$_POST["id_parroquia"];
$id_categoria=$_POST["id_categoria"];
$id_estado_denuncia=$_POST["id_estado_denuncia"];
$id_autoridad=$_POST["id_autoridad"];
$imagen=$_FILES['imagen']['name'];

$archivo = $_FILES['imagen']['tmp_name'];
$destino = "../../perfil/". $_FILES['imagen']['name'];
move_uploaded_file($archivo,$destino);


include_once("DenunciaCollector.php");
$DenunciaCollectorObj= new DenunciaCollector();
$DenunciaCollectorObj->insertDenuncia($titulo,$descripcion,$fecha_publicacion,$fecha_ejecucion,$id_denunciante,$id_ciudad,$id_parroquia,$id_categoria,$id_estado_denuncia,$id_autoridad,$imagen);


echo "<br>";

echo "<div class='container'>";
echo "  <h2>Denuncia</h2>";
echo "  <div class='panel panel-default'>";
echo "    <div class='panel-heading'> Denuncia Actualizada Correctamente</div>";
echo "   <div class='panel-body'>$titulo</div>";
echo " <div> <a href='readDenuncia.php'>Regresar</a></div> ";
echo "  </div>";
echo "</div>";
 


?>

</aside>
<?php

}

    
    else {
       echo "permiso denegado";
       echo"<a href='../index.php'>inicia sesion</a>";
    }
 ?>
</body>
</html>
