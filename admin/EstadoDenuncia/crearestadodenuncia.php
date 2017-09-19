<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Tabla Estado Denucia </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link href="../css/tablas.css" rel="stylesheet" >
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
    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Estado Denuncia</a></div>";
    echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='../readsupremo.php'>Menú</a></li>";
			echo "<li><a href='crearestadodenuncia.php'>Nuevo</a></li>";
		echo "</ul>";
    echo " <ul class='nav navbar-nav navbar-right'>";
    echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['MiSession'] . ")</a></li>";
    echo "<li><a href='../salir.php''><span class='glyphicon glyphicon-log-in'></span> Salir</a></li>";
    echo "</ul>";
    echo "</div>";
    echo "</nav>";


echo "<form method= 'POST' class='form-horizontal' action= 'nuevoestadodenuncia.php' id='estadodenuncia' title='estadodenuncia' >";
     echo "<div class='form-group'>";
         echo "<label for='inputEstado' class='control-label col-xs-2'>Estado:</label>";
         echo "<div class='col-xs-10'>";
      echo "<input name = 'nombre' type='text' id= 'nombre' class='form-control' placeholder='Nombre' required>";
         echo "</div>";
     echo "</div>";
     echo "<div class='form-group'>";
         echo "<div class='col-xs-offset-2 col-xs-10'>";
             echo "<button type='submit' class='btn btn-primary'>Grabar</button>";
         echo "</div>";
     echo "</div>";
echo "</form>";
?>
<div> <a href="readEstadoDenuncia.php">Regresar</a></div>



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