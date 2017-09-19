<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Tabla Denuncia </title>
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

include_once("DenunciaCollector.php");
$DenunciaCollectorObj = new DenunciaCollector();

echo "<div class='container'>";
echo "<h2>Denuncia</h2>";
echo "<div class='table-responsive'>"; 
echo "<table class='table'>"; 
echo "<thead>"; 
echo "<tr>"; 
echo " 	   <th>Código</th>"; 
echo "     <th>Titulo</th>"; 
echo " 	   <th>Descripcion</th>"; 
echo "     <th>Fecha Publicacion</th>"; 
echo "     <th>Fecha de ejecucion</th>";
echo "     <th>Denunciante</th>"; 
echo "     <th>Ciudad</th>"; 
echo "     <th>Parroquia</th>"; 
echo "     <th>Categoria</th>";  
echo "     <th>Estado</th>"; 
echo "     <th>Autoridad</th>";
echo "     <th>Imagen</th>";  
echo "</tr>"; 
echo "</thead>"; 

foreach ($DenunciaCollectorObj->showDenuncias() as $c){

$img = $c->getImagen();
echo "<tbody>"; 
echo "<tr>"; 
echo "<td>".$c->getIdDenuncia()."</td>"; 
echo "<td>".$c->getTitulo()."</td>";
echo "<td>".$c->getDescripcion()."</td>"; 
echo "<td>".$c->getFechaPublicacion()."</td>";
echo "<td>".$c->getFechaEjecucion()."</td>";
echo "<td>".$c->getIdDenunciante()."</td>";
echo "<td>".$c->getIdCiudad()."</td>";
echo "<td>".$c->getIdParroquia()."</td>";
echo "<td>".$c->getIdCategoria()."</td>";
echo "<td>".$c->getIdEstadoDenuncia()."</td>";
echo "<td>".$c->getIdAutoridad()."</td>";
echo "<td>" . "<img src='../../perfil/$img' width='50' height='50' />" . "</td>";

    echo "<td><a href='FormularioDenunciaEditar.php?id=".$c->getIdDenuncia()."'>Editar</a></td>"; 
	echo "<td><a href='deleteDenuncia.php?id=".$c->getIdDenuncia()."'>Eliminar</a></td>"; 
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
       echo "permiso denegado";
       echo"<a href='../index.php'>inicia sesion</a>";
    }
 ?>
</body>
</html>


