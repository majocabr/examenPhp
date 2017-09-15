<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset ="utf-8">
		<title> Eliminar EstadoDenuncia</title>
	</head>
<body>

<section>
</section>
<section>

</section>
<aside>
<?php

$id=$_GET["id"];

include_once("EstadoDenunciaCollector.php");
$EstadoDenunciaCollectorObj= new EstadoDenunciaCollector();
$EstadoDenunciaCollectorObj->deleteEstadoDenunciante($id);
echo "valor id: ".htmlspecialchars($id)." ha sido eliminado correctamente </br>";
?>

<div class="text-fieldsl">
         <a href='readEstadoDenuncia.php'>Volver al inicio</a>                                    
</div>

</aside>
</body>
</html>
