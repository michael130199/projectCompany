<?php 

if (isset($_POST["mostrarCliente"])) {
	$item = "ci_cli";
	$valor = $_POST["mostrarCliente"];


    $clientes = ControladorClientes::ctrMostrarClientes($item, $valor);

    echo '
    	<table class="table table-sm table-dark">
  <thead>
      <tr>
        <th>C.I.</th>
        <th>Domicilio</th>
        <th>Razon Social</th>
        <th>Telefono</th>
         <th>Acciones</th>
      </tr>
    </thead>
  <tbody class="bg-success">
    <tr>
      <td>'. $clientes["ci_cli"] .'</td>
      <td>'. $clientes["domicilio"] .'</td>
      <td>'.$clientes["razon_social"].'</td>
      <td>'.$clientes["telf"].'</td>
      
      <td>
        <form method="POST" action="index.php?ruta=cliente-opcion">
          <input type="hidden" name="ci_cli" value="'. $clientes["ci_cli"] .'">
          <input type="hidden" name="domicilio" value="'. $clientes["domicilio"] .'">
          <input type="hidden" name="razon_social" value="'. $clientes["razon_social"] .'">
          <input type="hidden" name="telf" value="'. $clientes["telf"] .'">
          

          <div class="btn-group">
          
         
            <button class="btn btn-warning" type="submit" value="' . $clientes["ci_cli"] . '" name="editarCliente"  ><i class="fa fa-pencil-alt"  ></i></button>
              
          </div>
        </form> 
      </td>

    </tr>
  </tbody>
</table>';
}

