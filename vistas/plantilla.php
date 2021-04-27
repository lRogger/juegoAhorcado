<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>AHORCADO</title>

	<link rel="stylesheet" type="text/css" href="vistas/css/estilos.css">

    

</head>

<body>

<section>
<br>
    
	<h1 style="width:420px"><FONT SIZE=7>AHORCADO<FONT SIZE=4></h1>
    <img src="images/logo.png" style="width:400px;height:300px"> 
	<?php
        
        $rutas = new rutascontrolador();
        $rutas -> rutas();

    ?>

</section>
	
</body>

</html>