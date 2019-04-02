<div class="container-fluid"> 

<div class="container py-5 my-5">
<h2 class="display-4 text-center mb-5">Agregar Nuevo Proyecto</h2>
<form class="form-row justify-content-center" method="POST">
  <div class="col-md-4 mb-3">
    <label for="descripcion">Descripcion</label>
    <?php echo '<input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Nombre del Proyecto... etc." value="' . $_POST["descripcion"] .'" required>'; ?>
  </div>
  <div class="col-md-1 mb-3">
    <label for="cantidad">Cuantia</label>
    <?php echo '<input type="number" class="form-control" id="cantidad" name="cantidad" value="'.$_POST["cantidad"].'" placeholder="0000-000-0000" required>'; ?>
  </div>
  <div class="col-md-2 mb-3">
    <label for="fecha_ini">Fecha de Inicio</label>
    <?php echo '<input type="date" class="form-control" id="fecha_ini" name="fecha_ini" value="'.$_POST["fecha_ini"].'" required>'; ?>
  </div>
  
  <div class="col-md-2 mb-3">
    <label for="fecha_fin">Fecha de Finalización</label>
    <?php echo '<input type="date" class="form-control" id="fech_-fin" value="'.$_POST["fecha_fin"].'" name="fecha_fin">'; ?>
  </div>

  <div class="col-md-3 mb-3">
    <?php 
        $item = "ci_cli";
        $valor = null;
        $clientes = ControladorClientes::ctrMostrarClientes($item, $valor);

        echo '<label for="ci_cli">CI del lider del Proyecto</label>
            <select class="form-control" id="ci_cli" name="ci_cli">
              <option>'.$_POST["ci_cli"].'</option>';

        foreach ($clientes as $key => $value){
          

          echo '<option>'. $value["ci_cli"] .'</option>';
        }
        echo '</select>';

         
     ?>
  </div>
  
  <div class="col col-4 align-self-center"> 
    <button class="btn btn-primary btn-lg btn-block" name="enviar" type="submit">Guardar</button>
  </div>
  <?php
      $crearProyecto = new ControladorProyectos();
      $crearProyecto->ctrEditarProyecto();
  ?>

</form>

  
</div>
</div>
