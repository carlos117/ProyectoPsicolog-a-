<?php

include "includs/conexion.php";


if (isset($_POST['crearExamenBtn'])) {



	if (!isset($_POST['TituloTxt']) and empty($_POST['TituloTxt'])  ){
		echo"error";
	}else{
        
        $nombre=$_POST['TituloTxt'];

		$insertExamen=$conexion->query("insert into examen(nombre) values ('$nombre') ");
   		header('Location:Lista.php');
	}

	



}


?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Crear Nuevo Examen</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="wrap">
    	<form action="" method="POST">
    	<h1>Nuevo Examen</h1>
    	
    	<input type="text" name="TituloTxt" placeholder="Titulo del Examen"><br><br>
    	
    	<input type="submit" name="crearExamenBtn" value="Crear Examen">

        </form>
	</div>
</body>
</html>