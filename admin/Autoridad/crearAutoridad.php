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
include_once("../TipoAutoridad/TipoAutoridadCollector.php");
	$TipoAutoridadCollectorObj = new TipoAutoridadCollector();
include_once("../Usuario/UsuarioCollector.php");
	$UsuarioCollectorObj = new UsuarioCollector(); 
 echo "<nav class='navbar navbar-default'>";
    echo "<div class='container-fluid'>";
    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Autoridad</a></div>";
    echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='../readsupremo.php'>Menú</a></li>";
			echo "<li><a href='crearAutoridad.php'>Nuevo</a></li>";
		echo "</ul>";
    echo " <ul class='nav navbar-nav navbar-right'>";
    echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['MiSession'] . ")</a></li>";
    echo "<li><a href='salir.php'><span class='glyphicon glyphicon-log-in'></span> Salir</a></li>";
    echo "</ul>";
    echo "</div>";
    echo "</nav>";


echo "<form method= 'POST' class='form-horizontal' action= 'nuevaAutoridad.php' id='autoridad' title='autoridad' >";
     echo "<div class='form-group'>";
         echo "<label for='inputName' class='control-label col-xs-2'>Nombre:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'nombre' type='text' id= 'nombre' class='form-control' placeholder='Nombre' required>";
         echo "</div>";
         echo "</div>";
    echo "<div class='form-group'>";
         echo "<label for='inputName' class='control-label col-xs-2'>Telefono:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'telefono' type='text' id= 'telefono' class='form-control' placeholder='Telefono' required>";
         echo "</div>";
         echo "</div>";
    echo "<div class='form-group'>";
         echo "<label for='inputName' class='control-label col-xs-2'>Email:</label>";
         echo "<div class='col-xs-10'>";
             echo "<input name = 'email' type='text' id= 'email' class='form-control' placeholder='Email' required>";
         echo "</div>";
        echo "</div>";
 echo "<div class='form-group'>";
echo "<label for='inputName' class='control-label col-xs-2'>Tipo de Autoridad:</label>";
        echo "<div class='col-xs-10'>";
             echo "<select name='id_tipoautoridad'  id= 'id_tipoautoridad' class='form-control' required>";
echo "<option selected></option>";
	foreach ($TipoAutoridadCollectorObj->showTiposAutoridades() as $c){
	echo "<option value='".$c->getIdTipoAutoridad()."'>".$c->getNombre()."</option>"; 
	   }

	echo "</select>";
        echo "</div>";
     echo "</div>";


   echo "<div class='form-group'>";
echo "<label for='inputName' class='control-label col-xs-2'>Usuario:</label>";
        echo "<div class='col-xs-10'>";
        echo "<select name='id_usuario'  id= 'id_usuario' class='form-control' required>";
	echo "<option selected></option>";	
	foreach ($UsuarioCollectorObj->showUA() as $c){
	  echo "<option value='".$c->getIdUsuario()."'>".$c->getUsuario()."</option>"; 
	   }
	echo "</select>";
        echo "</div>";
     echo "</div>";

echo "<div class='form-group'>";
         echo "<div class='col-xs-offset-2 col-xs-10'>";
             echo "<button type='submit' class='btn btn-primary'>Grabar</button>";
         echo "</div>";
     echo "</div>";
echo "</form>";
?>
 <div> <a href="readAutoridad.php">Regresar</a></div>


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
