<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset ="utf-8">
<title>Tabla Parroquia</title>
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
<aside>
<?php

echo "<nav class='navbar navbar-default'>";
echo "<div class='container-fluid'>";
echo "<div class='navbar-header'><a class='navbar-brand'>Actualizar Parroquia</a></div>";
echo "<ul class='nav navbar-nav'>";
echo "<li><a href='../readsupremo.php'>Menú</a></li>";
echo "<li><a href='createParroquia.php'>Nuevo</a></li>";
echo "</ul>";
echo "<ul class='nav navbar-nav navbar-right'>";
echo "<li><a href='#'>Hola:(" . $_SESSION ['MiSession'] . ")</a></li>";
echo "<li><a href='../salir.php''><span class='glyphicon glyphicon-log-in'></span> Salir</a></li>";
echo "</ul>";
echo "</div>";
echo "</nav>";

$id=$_GET['id'];
$nombre=$_GET['nombre'];
$idciudad=$_GET['idciudad'];
?>

<form method= "POST" class="form-horizontal" action= "guardarParroquia.php" >
<div class="form-group">
<label for="inputName" class="control-label col-xs-2">Código:</label>
<div class="col-xs-10">
<input name ="Codigo" type="text" value="<?php echo $id;?>" readonly></div>
</div>
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Nombre:</label>
         <div class="col-xs-10">
           <input name = "Nombre" type="text" id= "Nombre" class="form-control" placeholder="Nombre" value="<?php echo $nombre;?>" required>
         </div>
     </div>

<div class='form-group'>
      

<label for='inputName' class='control-label col-xs-2'>Ciudad:</label>
         <div class='col-xs-10'>
             <select name='idciudad'  id= 'idciudad' class='form-control' required>
		
<?php
include_once("../Ciudad/CiudadCollector.php"); //llamar el collector de la otra tabla
$CiudadCollectorObj = new CiudadCollector(); 
foreach ($CiudadCollectorObj->showCiudades() as $c){
if ($idciudad==$c->getIdCiudad()){
echo "<option value='".$idciudad."' selected>".$c->getNombre()."</option>"; //Se añade una nueva provincia a la lista
}
else{ 
echo "<option value='".$c->getIdCiudad()."'>".$c->getNombre()."</option>"; 
}
}
?>
	     </select>
         </div>
     </div>


     <div class="form-group">
         <div class="col-xs-offset-2 col-xs-10">
             <button type="submit" class="btn btn-primary">Grabar</button>
         </div>
     </div>
     <div> <a href="readParroquia.php">Regresar</a></div>
</form>

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
