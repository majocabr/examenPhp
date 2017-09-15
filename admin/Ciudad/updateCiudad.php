<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset ="utf-8">
<title>Tabla Ciudad</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="../../css/tablas.css" rel="stylesheet" >
</head>
<body>

<aside>
<?php

echo "<nav class='navbar navbar-default'>";
echo "<div class='container-fluid'>";
echo "<div class='navbar-header'><a class='navbar-brand'>Actualizar Ciudad</a></div>";
echo "<ul class='nav navbar-nav'>";
echo "<li><a href='../readsupremo.php'>Menú</a></li>";
echo "<li><a href='createCiudad.php'>Nuevo</a></li>";
echo "</ul>";
echo "<ul class='nav navbar-nav navbar-right'>";
echo "<li><a href='#'>Hola:(" . $_SESSION ['MiSession'] . ")</a></li>";
echo "<li><a href='../salir.php''><span class='glyphicon glyphicon-log-in'></span> Salir</a></li>";
echo "</ul>";
echo "</div>";
echo "</nav>";

$id=$_GET['id'];
$nombre=$_GET['nombre'];
include_once("CiudadCollector.php");
include_once("Ciudad.php");
$CiudadCollectorObj= new CiudadCollector();
$ObjCiudad=$CiudadCollectorObj->showCiudad($id);

?>

<form method= "POST" class="form-horizontal" action= "guardarCiudad.php?usuario=" >
<div class="form-group">
<label for="inputName" class="control-label col-xs-2">Código:</label>
<div class="col-xs-10">
<input name ="Codigo" type="text" value="<?php echo $id;?>" readonly></div>
</div>
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Nombre:</label>
         <div class="col-xs-10">
           <input name = "Nombre" type="text" id= "Nombre" class="form-control" placeholder="Nombre" value="<?php echo $nombre;?>">
         </div>
     </div>

<div class='form-group'>
      

<label for='inputName' class='control-label col-xs-2'>Provincia:</label>
         <div class='col-xs-10'>
             <select name='idprovincia'  id= 'idprovincia' class='form-control' required>
		
<?php
include_once("../Provincia/ProvinciaCollector.php"); //llamar el collector de la otra tabla
$ProvinciaCollectorObj = new ProvinciaCollector(); 
foreach ($ProvinciaCollectorObj->showProvincias() as $c){
if($c->getIdProvincia()==$ObjCiudad->getIdProvincia()){
echo "<option value='".$c->getIdProvincia()."' selected>".$c->getNombre()."</option>";
}else{
echo "<option value='".$c->getIdProvincia()."'>".$c->getNombre()."</option>"; 
}}
?>
	     </select>
         </div>
     </div>

     <div class="form-group">
         <div class="col-xs-offset-2 col-xs-10">
             <button type="submit" class="btn btn-primary">Grabar</button>
         </div>
     </div>
     <div> <a href="readCiudad.php">Regresar</a></div>
</form>

</aside>
</body>
</html>
