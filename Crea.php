<?php

include "includs/conexion.php";
$id = $_GET['id'];

$busquedaExamen=$conexion->query("select id,nombre from examen where id=$id ");


$buscaPreguntasExamen=$conexion->query(" select titulo,o.nombre from examen as exa join encuestas as e on exa.id=e.id_examen join opciones as o on e.id=o.id_encuesta where exa.id='$id' ;");


while($exa = $busquedaExamen->fetch_assoc()){
	
	$idExa=$exa['id'];
	$nombre=$exa['nombre'];
}


?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Sistema de encuestas</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="wrap">
    	<h1>Crea preguntas del examen: <?php echo$nombre;?></h1>
    	<?php

		if($buscaPreguntasExamen){

        	$variableActual="";

        	while($mostrarExamen = $buscaPreguntasExamen->fetch_assoc()){
	        
	        $variable=$mostrarExamen['titulo'];	
			
			if($variable != $variableActual){
				echo"<h2>".$variable."<h2><br>";
				$variableActual=$variable; 
			}
            echo"<h5>R : ".$mostrarExamen['nombre']."</h3><br>";
			
			}


		}
 		 echo"<br>";
 	     echo "<li><a href='agregar1.php?id=".$id." ' >+ Agregar pregunta</a></li><br> ";
    	?>
    	
	</div>
</body>
</html>