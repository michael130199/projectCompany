
<div class="mt-4 d-flex justify-content-between">
  <h1>Administrador de clientes</h1>
  <a href="index.php?ruta=cliente-agregar" class="btn btn-success btn-lg">Agregar</a>
</div>
<hr class="pb-5">

<div class="container-fluid">
  <h3>Registro De cliente</h3>
  

  


<div class="table-responsive">
  
  <table class="table table-striped table-dark">
    <thead>
      <tr>
        <th>C.I.</th>
        <th>Domicilio</th>
        <th>Razon Social</th>
        <th>Telefono</th>
         <th>Acciones</th>
      </tr>
    </thead>
    <tbody>

       <?php

        $item = null;
        $valor = null;

        $clientes = ControladorClientes::ctrMostrarClientes($item, $valor);

        foreach ($clientes as $key => $value){
         
          echo ' <tr>
                  <td>'. $value["ci_cli"] .'</td>
                  <td>'. $value["domicilio"] .'</td>
                  <td>'.$value["razon_social"].'</td>
                  <td>'.$value["telf"].'</td>
                  
                  <td>
                    <form method="POST" action="index.php?ruta=cliente-opcion">
                      <input type="hidden" name="ci_cli" value="'. $value["ci_cli"] .'">
                      <input type="hidden" name="domicilio" value="'. $value["domicilio"] .'">
                      <input type="hidden" name="razon_social" value="'. $value["razon_social"] .'">
                      <input type="hidden" name="telf" value="'. $value["telf"] .'">
                      

                      <div class="btn-group">
                      
                     
                        <button class="btn btn-warning" type="submit" value="' . $value["ci_cli"] . '" name="editarCliente"  ><i class="fa fa-pencil-alt"  ></i></button>
                        <button class="btn btn-danger"  type="submit" value="' . $value["ci_cli"] . '" name="eliminarCliente"><i class="fa fa-times-circle"></i></button>
                          
                      </div>
                    </form> 
                  </td>

                </tr>';
        }

//cedula de yoly10352466
        ?> 
    </tbody>
  </table>
</div>
</div>


<hr>