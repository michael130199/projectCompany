<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  
	<?php
	echo '<h1 class="display-4">Ciente # ' . $_POST["ci_cli"] . '</h1>'; ?>
 	

 	<table class="table table-striped">
	  	<tbody>
		    <tr>
		    	<th>Cedula</th>                        
		    	<?php echo '<td>'.$_POST["ci_cli"].'</td>'; ?>
		    </tr>

		    <tr>
		    	<th>Telefono</th>
		    	<?php echo '<td>'.$_POST["telf"].'</td>'; ?>
			</tr>

		    <tr>
		    	<th>Domicilio</th>
		    	<?php echo '<td>'.$_POST["domicilio"].'</td>'; ?>
		    </tr>

		    <tr>
		    	<th>Razon Social</th>
		    	<?php echo '<td>'.$_POST["razon_social"].'</td>'; ?>
		    </tr>
		</tbody>
	</table>
	<form method="POST">
		<?php 
			echo '<input type="hidden" name="ci_cli" value="'.$_POST["ci_cli"].'">'; 
			echo '<input type="hidden" name="eliminarCliente" value="'.$_POST["eliminarCliente"].'">'; 
			
			?>	
	 	<p class="lead">Desea Eliminar este Cliente</p>
		<button type="submit" class="btn btn-success" name="enviar" value="1">Aceptar </button>
		<button type="submit" class="btn btn-danger"  name="enviar"  value="2">Cancelar</button>
		<?php
	      $eliminarCliente = new ControladorClientes();
	      $eliminarCliente->ctrEliminarCliente();
	  	?>
	</form>

</div>