<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<link rel="stylesheet" href="vistas/css/bootstrap.min.css">
	<link rel="stylesheet" href="vistas/css/estilos.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
	<!-- 
	.c40{background-color: #f6f4f4;}
	.c41{background-color: #3e3939;}
	.c42{background-color: #2c2727;}
	.c43{background-color: #ff7517;}

 -->

</head>
<body>
	<?php 
		echo '<div>';

    include "modulos/header.php";
		
		if(isset($_GET["ruta"])){
      
      if(
        $_GET["ruta"] == "inicio" ||
        $_GET["ruta"] == "cliente" ||
        $_GET["ruta"] == "cliente-agregar" ||
        $_GET["ruta"] == "cliente-opcion" ||
        $_GET["ruta"] == "cliente-actualizar" ||

        $_GET["ruta"] == "colaborador" ||

        $_GET["ruta"] == "proyecto" ||
        $_GET["ruta"] == "proyecto-opcion" ||
        $_GET["ruta"] == "proyecto-agregar" ||
        $_GET["ruta"] == "proyecto-actualizar" ||
        $_GET["ruta"] == "proyecto-tabla" ||

        $_GET["ruta"] == "pago" 
        ){
          include "modulos/".$_GET["ruta"].".php";
      
      }

    }else{

  		include "modulos/inicio.php";

     }

    include "modulos/footer.php";
	 ?>

	<script src="vistas/js/jquery-3.3.1.slim.min.js"></script>
	<script src="vistas/js/popper.min.js"></script>
	<script src="vistas/js/bootstrap.min.js"></script>
</body>
</html>