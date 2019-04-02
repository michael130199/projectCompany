<div class="container my-5">

<?php 
	if (isset($_POST["editarProyecto"])) {
		
		include 'proyecto-modificar.php';
		
	}elseif(isset($_POST["eliminarProyecto"])){
		
		include 'proyecto-eliminar.php';

	}elseif (isset($_POST["mostrarCliente"])) {
		include "cliente-mostrar.php";

	}


 ?>

</div>
