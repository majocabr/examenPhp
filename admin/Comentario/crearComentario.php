<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Tabla Tipo Autoridad </title>
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


<aside>
<?php
include_once("../Denuncia/DenunciaCollector.php");
    $DenunciaCollectorObj = new DenunciaCollector();
include_once("../Denunciante/DenuncianteCollector.php");
    $DenuncianteCollectorObj = new DenuncianteCollector(); 



 echo "<nav class='navbar navbar-default'>";
    echo "<div class='container-fluid'>";
    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Comentario</a></div>";
    echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='../readsupremo.php'>Menú</a></li>";
			echo "<li><a href='crearComentario.php'>Nuevo</a></li>";
		echo "</ul>";
    echo " <ul class='nav navbar-nav navbar-right'>";
    echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['MiSession'] . ")</a></li>";
    echo "<li><a href='../salir.php''><span class='glyphicon glyphicon-log-in'></span> Salir</a></li>";
    echo "</ul>";
    echo "</div>";
    echo "</nav>";


echo "<form method= 'POST' class='form-horizontal' action= 'nuevoComentario.php' id='comentario' title='comentario' >";
     echo "<div class='form-group'>";
         echo "<label for='inputName' class='control-label col-xs-2'>Descripcion:</label>";


         echo "<div class='col-xs-10'>";
             echo "<input name = 'descripccion' type='text' id= 'descripccion' class='form-control' placeholder='Descripcion' required >";
         echo "</div>";
         echo "</div>";

echo "<div class='form-group'>";
echo "<label for='inputName' class='control-label col-xs-2'>Denuncia:</label>";
        echo "<div class='col-xs-10'>";
             echo "<select name='id_denuncia'  id= 'id_denuncia' class='form-control' required>";
echo "<option selected></option>";
    foreach ($DenunciaCollectorObj->showDenuncias() as $c){
    echo "<option value='".$c->getIdDenuncia()."'>".$c->getTitulo()."</option>"; 
       }

    echo "</select>";
        echo "</div>";
     echo "</div>";


     echo "<div class='form-group'>";
echo "<label for='inputName' class='control-label col-xs-2'>Denunciante:</label>";
        echo "<div class='col-xs-10'>";
             echo "<select name='id_denunciante'  id= 'id_denunciante' class='form-control' required>";
echo "<option selected></option>";
    foreach ($DenuncianteCollectorObj->showDenunciantes() as $c){
    echo "<option value='".$c->getIdDenunciante()."'>".$c->getNombre()."</option>"; 
       }

    echo "</select>";
        echo "</div>";
     echo "</div>";

         echo "</div>";





    
     echo "<div class='form-group'>";
         echo "<div class='col-xs-offset-2 col-xs-10'>";
             echo "<button type='submit' class='btn btn-primary'>Grabar</button>";
             echo"<div> <a href='readComentario.php'>Regresar</a></div>";
         echo "</div>";
     echo "</div>";
echo "</form>";
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