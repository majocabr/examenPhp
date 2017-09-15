<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset ="utf-8">
<title>Cierre de sesion</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/admin.css" media="screen">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
	
<body>

<section id="main">

<?php

if (isset($_SESSION['MiSession'])) {
session_destroy();

echo "<img id='imgCierreSesion' src=\"../images/cierredesesion.jpg\">";
echo "<div class='mensajeDestroy'>";
echo "Se ha destruido exitosamente la sesión<br/>";
echo "</div>";
echo "<a class='enlaceVolver' href='../index.html'>Volver</a>";
}

else{
echo "<div class='mensajeDestroy'>";
echo "ERROR... <br/>";
echo "</div>";

echo "<a class='enlaceVolver' href='../index.html'>Volver</a>";
}

?>
</section>

</body>
</html>


