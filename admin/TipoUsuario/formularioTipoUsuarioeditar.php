<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Actualizar Tipo de Usuario </title>
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
<section>
</section>
<section>

</section>
<aside>
<?php

echo "<nav class='navbar navbar-default'>";
    echo "<div class='container-fluid'>";
    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Tipo de Usuario</a></div>";
    echo " <ul class='nav navbar-nav'>";
		      	echo "<li><a href='../readsupremo.php'>Menú</a></li>";
			echo "<li><a href='newTipoUsuario.php'>Nuevo</a></li>";
		echo "</ul>";
    echo " <ul class='nav navbar-nav navbar-right'>";
    echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['MiSession'] . ")</a></li>";
    echo "<li><a href='../salir.php''><span class='glyphicon glyphicon-log-in'></span> Salir</a></li>";
    echo "</ul>";
    echo "</div>";
    echo "</nav>";



$id=$_GET['id'];

include_once("TipoUsuarioCollector.php");
include_once("TipoUsuario.php");
$TipoUsuarioCollectorObj= new TipoUsuarioCollector();
$ObjTipoUsuario=$TipoUsuarioCollectorObj->showTipoUsuario($id);


echo "Edicion en proceso . . . . </br>";

?>

<form method= "post" class="form-horizontal" action= "updateTipoUsuario.php" >
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Código:</label>
         <div class="col-xs-10">
             <input name = "idtipousuario" type="text" id= "idtipousuario" class="form-control"
 placeholder="Codigo" value="<?php echo $ObjTipoUsuario->getIdTipoUsuario(); ?>" readonly>
         </div>
     </div>
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Tipo:</label>
         <div class="col-xs-10">
             <input name = "tipo" type="text" id= "tipo" class="form-control" placeholder="Tipo" value="<?php echo $ObjTipoUsuario->getTipo(); ?>" required/>
         </div>
     </div>
     <div class="form-group">
     <div> <a href="readTipoUsuario.php">Regresar</a></div>
         <div class="col-xs-offset-2 col-xs-10">
             <button type="submit" class="btn btn-primary">Grabar</button>
         </div>
     </div>
</form>



</aside>
<?php

}
    
    else {
       echo "permiso denegado";
       echo"<a href='../index.php'>Inicia sesion</a>";
    }
 ?>
</body>
</html>



