
<div >
<div class="mt-4 d-flex justify-content-between">
  <h1>Administrador de Proyectos</h1>
  <a href="index.php?ruta=proyecto-agregar" class="btn btn-success btn-lg">Agregar</a>
</div>
<hr class="pb-5">

<div class="container-fluid">
  <h3>Registro De Proyecto</h3>
  

  


<div class="table-responsive">
  
  <table class="table table-striped table-dark">
    <thead>
      <tr>
        <th>#</th>
        <th>Descripción</th>
        <th>Cuantia</th>
        <th>Fecha de Inicio</th>
        <th>Fecha de Finalización</th>
        <th>Cedula del Cliente</th>
         <th>Acciones</th>
      </tr>
    </thead>
    <tbody>

       <?php

        $item = null;
        $valor = null;

        $Proyectos = ControladorProyectos::ctrMostrarProyectos($item, $valor);

      //codigo_pro,descripcion, cantidad, fecha_ini, fecha_fin, ci_cli
        foreach ($Proyectos as $key => $value){
         
          echo ' <tr>

                  <form method="POST" action="index.php?ruta=proyecto-opcion">
                  <td>'. $value["codigo_pro"] .'</td>
                  <td>'. $value["descripcion"] .'</td>
                  <td>'.$value["cantidad"].'</td>
                  <td>'.$value["fecha_ini"].'</td>
                  <td>'.$value["fecha_fin"].'</td>
                  <td><button class="btn btn-link" type="submit" name="mostrarCliente" value="'.$value["ci_cli"].'">'.$value["ci_cli"].'</button></td>
                  
                  <td>
                      <input type="hidden" name="codigo_pro" value="'. $value["codigo_pro"] .'">
                      <input type="hidden" name="descripcion" value="'. $value["descripcion"] .'">
                      <input type="hidden" name="cantidad" value="'. $value["cantidad"] .'">
                      <input type="hidden" name="fecha_ini" value="'. $value["fecha_ini"] .'">
                      <input type="hidden" name="fecha_fin" value="'. $value["fecha_fin"] .'">
                      <input type="hidden" name="ci_cli" value="'. $value["ci_cli"] .'">
                      

                      <div class="btn-group">
                      
                     
                        <button class="btn btn-warning" type="submit" value="' . $value["codigo_pro"] . '" name="editarProyecto"  ><i class="fa fa-pencil-alt"  ></i></button>
                        <button class="btn btn-danger"  type="submit" value="' . $value["codigo_pro"] . '" name="eliminarProyecto"><i class="fa fa-times-circle"></i></button>
                          
                      </div>
                    
                  </td>
                </form>
                </tr>';
        }

//cedula de yoly10352466
        ?> 
    </tbody>
  </table>
</div>
</div>

</div>
<hr>