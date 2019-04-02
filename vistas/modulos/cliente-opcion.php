<?php 
	if (isset($_POST["editarCliente"])) {
		
		include 'cliente-modificar.php';
		
	}elseif(isset($_POST["eliminarCliente"])){
		
		include 'cliente-eliminar.php';

	}

 ?>