<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Actualizar Autoridad </title>
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
<section>
</section>
<section>

</section>
<aside>
<?php

echo "<nav class='navbar navbar-default'>";
    echo "<div class='container-fluid'>";
    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Autoridad</a></div>";
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



$id=$_GET['id'];

include_once("AutoridadCollector.php");
include_once("Autoridad.php");
$AutoridadCollectorObj= new AutoridadCollector();
$ObjAutoridad=$AutoridadCollectorObj->showAutoridad($id);



?>

<form method= "POST" class="form-horizontal" action= "Guardarautoridad.php" >
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Código:</label>
         <div class="col-xs-10">
             <input name = "Codigo" type="text" id= "Codigo" class="form-control"
 placeholder="Codigo" value="<?php echo $ObjAutoridad->getIdAutoridad(); ?>" readonly>
         </div>
     </div>
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Nombre:</label>
         <div class="col-xs-10">
             <input name = "Nombre" type="text" id= "Nombre" class="form-control" placeholder="Nombre" value="<?php echo $ObjAutoridad->getNombre(); ?>" required>
         </div>
     </div>
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Telefono:</label>
         <div class="col-xs-10">
             <input name = "telefono" type="text" id= "telefono" class="form-control" placeholder="Telefono" value="<?php echo $ObjAutoridad->getTelefono(); ?>" required>
         </div>
     </div>
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">E-mail:</label>
         <div class="col-xs-10">
             <input name = "email" type="text" id= "email" class="form-control" placeholder="E-mail" value="<?php echo $ObjAutoridad->getEmail(); ?>" required>
         </div>
     </div>
<div class="form-group">
<label for='inputName' class='control-label col-xs-2'>Tipo de Autoridad:</label>
        <div class='col-xs-10'>
             <select name='id_tipoautoridad'  id= 'id_tipoautoridad' class='form-control' required>
		
<?php
	include_once("../TipoAutoridad/TipoAutoridadCollector.php");
	$TipoAutoridadCollectorObj = new TipoAutoridadCollector(); 
	foreach ($TipoAutoridadCollectorObj->showTiposAutoridades() as $c){
	   if($c->getIdTipoAutoridad()==$ObjAutoridad->getIdTipoAutoridad()){
		echo "<option value='".$c->getIdTipoAutoridad()."'selected>".$c->getNombre()."</option>"; 
	   }else{
		echo "<option value='".$c->getIdTipoAutoridad()."'>".$c->getNombre()."</option>"; 
	   }}
?>
	     </select>
        </div>
     </div>


     <div class="form-group">
<label for='inputName' class='control-label col-xs-2'>Usuario:</label>
        <div class='col-xs-10'>
             <select name='id_usuario'  id= 'id_usuario' class='form-control' required>
		
<?php
	include_once("../Usuario/UsuarioCollector.php");
	$UsuarioCollectorObj = new UsuarioCollector(); 
	foreach ($UsuarioCollectorObj->showUA() as $c){
	   if($c->getIdUsuario()==$ObjAutoridad->getIdUsuario()){
		echo "<option value='".$c->getIdUsuario()."'selected>".$c->getUsuario()."</option>"; 
	   }else{
		echo "<option value='".$c->getIdUsuario()."'>".$c->getUsuario()."</option>"; 
	   }}
?>
	     </select>
        </div>
     </div>
     <div class="form-group">
     <div> <a href="readAutoridad.php">Regresar</a></div>
         <div class="col-xs-offset-2 col-xs-10">
             <button type="submit" class="btn btn-primary">Grabar</button>
         </div>
     </div>
</form>



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
