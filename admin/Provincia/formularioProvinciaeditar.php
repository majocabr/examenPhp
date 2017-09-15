<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> FORMULARIO demo</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php
$id=$_GET["id"];
echo "el valor de id es ".$id;
include_once("ProvinciaCollector.php");
include_once("Provincia.php");
$ProvinciaCollectorObj= new ProvinciaCollector();
$ObjProvincia=$ProvinciaCollectorObj->showProvincia($id);
print_r($ObjProvincia);
?>
<h2>Editar Objeto Provincia</h2>
<form id="contact-form" action="updateProvincia.php" method= "post">
<div style="height: 20px;"></div>
<div class="text-fieldsl">
<div class="float-input">
ID:	 <input name="idprovincia" id="idprovincia" type="text" value="<?php echo $ObjProvincia->getIdProvincia(); ?>" readonly />
<span><i class="fa fa-user"></i></span>
</div>
<div class="float-input">
NOMBRE:	<input name="nombre" id="nombre" type="text" value="<?php echo $ObjProvincia->getNombre(); ?>"  autofocus required/>
<span><i class="fa fa-lock"></i></span>
</div>
<a href="readProvincia.php">Cancelar</a>
<input type="submit" id="submit_save" class="main-button" value="Guardar"/>
                                                          
</div>
</form>

</aside>
</body>
</html>
