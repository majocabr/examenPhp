<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset ="utf-8">
<title>Tabla Comentario</title>
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
echo "<div class='navbar-header'><a class='navbar-brand'>Actualizar Comentario</a></div>";
echo "<ul class='nav navbar-nav'>";
echo "<li><a href='../readsupremo.php'>Menú</a></li>";
echo "<li><a href='crearComentario.php'>Nuevo</a></li>";
echo "</ul>";
echo "<ul class='nav navbar-nav navbar-right'>";
echo "<li><a href='#'>Hola:(" . $_SESSION ['MiSession'] . ")</a></li>";
echo "<li><a href='../salir.php''><span class='glyphicon glyphicon-log-in'></span> Salir</a></li>";
echo "</ul>";
echo "</div>";
echo "</nav>";

$id=$_GET['id'];
$descripccion= $_GET['descripccion'];
include_once("ComentarioCollector.php");
include_once("Comentario.php");
$ComentarioCollectorObj= new ComentarioCollector();
$ObjComentario=$ComentarioCollectorObj->showComentario($id);

?>

<form method= "POST" class="form-horizontal" action= "guardarComentario.php" >
<div class="form-group">
<label for="inputName" class="control-label col-xs-2">Código:</label>
<div class="col-xs-10">
<input name ="Codigo" type="text" value="<?php echo $id;?>" readonly></div>
</div>
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">descripcion:</label>
         <div class="col-xs-10">
           <input name = "descripccion" type="text" id= "descripccion" class="form-control" placeholder="Descripcion" value="<?php echo $descripccion;?>" required>
         </div>
     </div>



<div class='form-group'>
<label for='inputName' class='control-label col-xs-2'>Denuncia:</label>
         <div class='col-xs-10'>
<select name='id_denuncia'  id= 'id_denuncia' class='form-control' required>

<?php

include_once("../Denuncia/DenunciaCollector.php"); //llamar el collector de la otra tabla
$DenunciaCollectorObj = new DenunciaCollector(); 
foreach ($DenunciaCollectorObj->showDenuncias() as $c){
if($c->getIdDenuncia()==$ObjComentario->getIdDenuncia()){
echo "<option value='".$c->getIdDenuncia()."' selected>".$c->getTitulo()."</option>";
}else{
echo "<option value='".$c->getIdDenuncia()."'>".$c->getTitulo()."</option>"; 
}}
?>
</select>
         </div>
</div>

<div class='form-group'>
<label for='inputName' class='control-label col-xs-2'>Denunciante:</label>
         <div class='col-xs-10'>
<select name='id_denunciante'  id= 'id_denunciante' class='form-control' required>

<?php

include_once("../Denunciante/DenuncianteCollector.php"); //llamar el collector de la otra tabla
$DenuncianteCollectorObj = new DenuncianteCollector(); 
foreach ($DenuncianteCollectorObj->showDenunciantes() as $c){
if($c->getIdDenunciante()==$ObjComentario->getIdDenuncia()){
echo "<option value='".$c->getIdDenunciante()."' selected>".$c->getNombre()."</option>";
}else{
echo "<option value='".$c->getIdDenunciante()."'>".$c->getNombre()."</option>"; 
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
     <div> <a href="readComentario.php">Regresar</a></div>
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
