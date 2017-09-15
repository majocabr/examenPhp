<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Actualizar Denuncia </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link href="../../css/tablas.css" rel="stylesheet" >
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php

echo "<nav class='navbar navbar-default'>";
    echo "<div class='container-fluid'>";
    echo "<div class='navbar-header'><a class='navbar-brand' >Tabla Denunciante</a></div>";
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



$id=$_GET['id'];

include_once("DenunciaCollector.php");
include_once("Denuncia.php");
$DenunciaCollectorObj= new DenunciaCollector();
$ObjDenuncia=$DenunciaCollectorObj->showDenuncia($id);





?>

<form method= "post" class="form-horizontal" action= "updateDenuncia.php" >
       <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Código:</label>
         <div class="col-xs-10">
             <input name = "id_denuncia" type="text" id= "id_denuncia" class="form-control"
 placeholder="Codigo" value="<?php echo $ObjDenuncia->getIdDenuncia(); ?>" readonly/>
         </div>
     </div>
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Titulo:</label>
         <div class="col-xs-10">
             <input name = "Titulo" type="text" id= "Titulo" class="form-control" placeholder="Titulo" value="<?php echo $ObjDenuncia->getTitulo(); ?>" />
         </div>
     </div>
  <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Descripcion:</label>
         <div class="col-xs-10">
             <input name = "Descripcion" type="text" id= "Descripcion" class="form-control"
 placeholder="Descripcion" value="<?php echo $ObjDenuncia->getDescripcion(); ?>" />
         </div>
     </div>
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Fecha Publicacion:</label>
         <div class="col-xs-10">
             <input name = "fecha" type="date" id= "fecha" class="form-control" placeholder="fecha" value="<?php echo $ObjDenuncia->getFechaPublicacion(); ?>" readonly/>
                      </div>
     </div>

        <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Fecha Ejecucion:</label>
         <div class="col-xs-10">
             <input name = "fecha" type="date" id= "fecha" step="1" min="2013-01-01" max="2013-12-31" class="form-control" placeholder="fecha" value="<?php echo $ObjDenuncia->getFechaEjecucion(); ?>" />
                      </div>
     </div>
<!-- ****************************************Combo Box Denunciante************************************************** -->
<div class='form-group'>
      

<label for='inputName' class='control-label col-xs-2'>Denunciante:</label>
         <div class='col-xs-10'>
             <select name='id_denunciante'  id= 'id_denunciante' class='form-control' required>      
<?php
include_once("../Denunciante/DenuncianteCollector.php"); //llamar el collector de la otra tabla
$DenuncianteCollectorObj = new DenuncianteCollector(); 
foreach ($DenuncianteCollectorObj->showDenunciantes() as $c){
if($c->getIdDenunciante()==$ObjDenuncia->getIdDenunciante()){
echo "<option value='".$c->getIdDenunciante()."' selected>".$c->getNombre()."</option>";
}else{
echo "<option value='".$c->getIdDenunciante()."'>".$c->getNombre()."</option>"; 
}}
?>
         </select>
         </div>
     </div>
<!-- ****************************************Combo Box Ciudad************************************************** -->
<div class='form-group'>
      

<label for='inputName' class='control-label col-xs-2'>Ciudad:</label>
         <div class='col-xs-10'>
             <select name='idciudad'  id= 'idciudad' class='form-control' required>      
<?php
include_once("../Ciudad/CiudadCollector.php"); //llamar el collector de la otra tabla
$CiudadCollectorObj = new CiudadCollector(); 
foreach ($CiudadCollectorObj->showCiudades() as $c){
if($c->getIdCiudad()==$ObjDenuncia->getIdCiudad()){
echo "<option value='".$c->getIdCiudad()."' selected>".$c->getNombre()."</option>";
}else{
echo "<option value='".$c->getIdCiudad()."'>".$c->getNombre()."</option>"; 
}}
?>
         </select>
         </div>
     </div>
      
<!-- ****************************************Combo Box Parroquia************************************************** -->
<div class='form-group'>
 <label for='inputName' class='control-label col-xs-2'>Parroquia: </label>
 <div class="col-xs-10">
 <select name='idparroquia'  id= 'idparroquia' class='form-control' required >
  <?php 
include_once("../Parroquia/ParroquiaCollector.php");
$ParroquiaCollectorObj = new ParroquiaCollector(); 
foreach ($ParroquiaCollectorObj->showParroquias() as $d){
if($d->getIdParroquia()==$ObjDenuncia->getIdParroquia()){
echo "<option value='".$d->getIdParroquia()."' selected>".$d->getNombre()."</option>";
}else{
echo "<option value='".$d->getIdParroquia()."'>".$d->getNombre()."</option>"; 
}}
   ?>
 </select>
</div>
</div>
<!-- ****************************************Combo Box Categoria************************************************** -->
<div class='form-group'>
      

<label for='inputName' class='control-label col-xs-2'>Categoria:</label>
         <div class='col-xs-10'>
             <select name='idcategoria'  id= 'idcategoria' class='form-control' required>      
<?php
include_once("../Categoria/CategoriaCollector.php"); //llamar el collector de la otra tabla
$CategoriaCollectorObj = new CategoriaCollector(); 
foreach ($CategoriaCollectorObj->showCategorias() as $c){
if($c->getIdCategoria()==$ObjDenuncia->getIdCategoria()){
echo "<option value='".$c->getIdCategoria()."' selected>".$c->getNombre()."</option>";
}else{
echo "<option value='".$c->getIdCategoria()."'>".$c->getNombre()."</option>"; 
}}
?>
         </select>
         </div>
     </div>
      
     <!-- ****************************************Combo Box Estado************************************************** -->
<div class='form-group'>
      

<label for='inputName' class='control-label col-xs-2'>Estado de denuncia:</label>
         <div class='col-xs-10'>
             <select name='id_estado_denuncia'  id= 'id_estado_denuncia' class='form-control' required>      
<?php
include_once("../EstadoDenuncia/EstadoDenunciaCollector.php"); //llamar el collector de la otra tabla
$EstadoDenunciaCollectorObj = new EstadoDenunciaCollector(); 
foreach ($EstadoDenunciaCollectorObj->showEstadoDenuncia() as $c){
if($c->getIdEstadoDenuncia()==$ObjDenuncia->getIdEstadoDenuncia()){
echo "<option value='".$c->getIdEstadoDenuncia()."' selected>".$c->getNombre()."</option>";
}else{
echo "<option value='".$c->getIdEstadoDenuncia()."'>".$c->getNombre()."</option>"; 
}}
?>
         </select>
         </div>
     </div>
      <!-- ****************************************Combo Box Autoridad************************************************** -->
<div class='form-group'>
      

<label for='inputName' class='control-label col-xs-2'>Autoridad:</label>
         <div class='col-xs-10'>
             <select name='idautoridad'  id= 'idautoridad' class='form-control' required>      
<?php
include_once("../Autoridad/AutoridadCollector.php"); //llamar el collector de la otra tabla
$AutoridadCollectorObj = new AutoridadCollector(); 
foreach ($AutoridadCollectorObj->showAutoridades() as $c){
if($c->getIdAutoridad()==$ObjDenuncia->getIdAutoridad()){
echo "<option value='".$c->getIdAutoridad()."' selected>".$c->getNombre()."</option>";
}else{
echo "<option value='".$c->getIdAutoridad()."'>".$c->getNombre()."</option>"; 
}}
?>
         </select>
         </div>
     </div>
 <!-- ****************************************Foto************************************************** -->
<div class="form-group">
<div class='col-xs-10'>


 <label for="imagen">Imagen</label>

 <!-- <?php 
// $img = $_GET['imagen'];
 echo "<img src='../perfil/$img' width='50' height='50' />"?> -->
  <input id="imagen" name="imagen" size="30" type="file">


</div>
                
            </div>



     <div class="form-group">
         <div class="col-xs-offset-2 col-xs-10">
             <button type="submit" class="btn btn-primary">Grabar</button>
         </div>
     </div>
</form>



</aside>
</body>
</html>







