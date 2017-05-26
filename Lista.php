<?php
include "includs/conexion.php";

$consultaExamen=$conexion->query("select id,nombre from examen ;");


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
    	<h1>Examenes Creados</h1>

    	<?php
                while($exa = $consultaExamen->fetch_assoc()){
                          
                    
                    echo "<li><a href='Crea.php?id=".$exa['id']." ' >".$exa['nombre']."</a></li><br> ";
                  

                   

                }
                  
        ?>	




		
		</div>
</body>
</html>