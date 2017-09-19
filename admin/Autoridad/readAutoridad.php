<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Tabla Autoridad </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link href="css/tablas.css" rel="stylesheet" >
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
    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Categoria</a></div>";
    echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='../readsupremo.php'>Menú</a></li>";
			echo "<li><a href='crearAutoridad.php'>Nuevo</a></li>";
		echo "</ul>";
    echo " <ul class='nav navbar-nav navbar-right'>";
    echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['MiSession'] . ")</a></li>";
    echo "<li><a href='../salir.php''><span class='glyphicon glyphicon-log-in'></span> Salir</a></li>";
    echo "</ul>";
    echo "</div>";
    echo "</nav>";

include_once("AutoridadCollector.php");
$AutoridadCollectorObj = new AutoridadCollector();

echo "<div class='container'>";
echo "<h2>Autoridad</h2>";
echo "<div class='table-responsive'>"; 
echo "<table class='table'>"; 
echo "<thead>"; 
echo "<tr>"; 
echo " 	   <th>Código</th>"; 
echo "     <th>Nombre</th>";  
echo " 	   <th>Telefono</th>"; 
echo "     <th>E-mail</th>"; 
echo " 	   <th>Tipo de Autoridad</th>"; 
echo "     <th>Usuario</th>"; 
echo "</tr>"; 
echo "</thead>"; 

foreach ($AutoridadCollectorObj -> showAutoridades() as $c){

echo "<tbody>"; 
echo "<tr>"; 
echo "<td>".$c->getIdAutoridad()."</td>"; 
echo "<td>".$c->getNombre()."</td>";
echo "<td>".$c->getTelefono()."</td>"; 
echo "<td>".$c->getEmail()."</td>";
echo "<td>".$c->getIdTipoAutoridad()."</td>"; 
echo "<td>".$c->getIdUsuario()."</td>";

    echo "<td><a href='updateAutoridad.php?id=".$c->getIdAutoridad()."'>Editar</a></td>"; 
	echo "<td><a href='deleteAutoridad.php?id=".$c->getIdAutoridad()."'>Eliminar</a></td>"; 
	echo "</tr>"; 

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
       // echo "permiso denegado";
        echo"<a href='../index.php'>iniciar sesion</a>";
    }
 ?>

</body>
</html>
