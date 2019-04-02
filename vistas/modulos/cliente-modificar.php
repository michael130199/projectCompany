<div > 



  <?php 
    if (isset($_POST["editarCliente"])){
      echo '<div class="container py-5 my-5">';
    }else{
      echo '<div class="">';
    }
   ?>
<h2 class="display-4 text-center mb-5">Modificar Cliente</h2>
<form class="form-row justify-content-center" method="POST">
  <div class="col-md-3 mb-3">
    <label for="Cedula1">Cedula</label>
    <?php echo '<input type="number" class="form-control" id="Cedula1" name="ci_cli" placeholder="00.000.000" max=350000000 value="'.$_POST["ci_cli"].'" required>'; ?>
  </div>
  <div class="col-md-3 mb-3">
    <label for="Telefono1">Numero de Telefono</label>
    <?php echo '<input type="number" class="form-control" id="Telefono1" name="telf" placeholder="0000-000-0000" value="'.$_POST["telf"].'" required>'; ?>
  </div>
  <div class="col-md-3 mb-3">
    <label for="Domicilio1">Example textarea</label>
    <?php  echo '<textarea class="form-control" id="Domicilio1" name="domicilio" rows="3" required>'.$_POST["domicilio"].'</textarea>'; ?>
  </div>
  <div class="col-md-3 mb-3">
    <label for="Razon1">Razon Social</label>
    <?php echo '<input type="text" class="form-control" id="Razon1" name="razon_social" placeholder="Empresa | *** | Entidad" value="'.$_POST["razon_social"].'" required>'; ?>
  </div>
  <?php
    if (isset($_POST["editarCliente"])){ 
      echo'<input type="hidden" name="editarCliente" value="'.$_POST["editarCliente"].'">'; 
    }
  ?>
  <div class="col col-4 align-self-center"> 
    <button class="btn btn-success btn-lg btn-block" name="enviar" value="1" type="submit">Guardar</button>
  </div>
  <?php
      $editarCliente = ControladorClientes::ctrEditarCliente();
  ?>

</form>

  
</div>
</div>


<script>
  var input1=  document.getElementById('Cedula1');
  
  input1.addEventListener('input',function(){
    if (this.value.length > 8)  
      this.value = this.value.slice(0,8); 
  })

  var input2=  document.getElementById('Telefono1');
  
  input2.addEventListener('input',function(){
    if (this.value.length > 11)  
      this.value = this.value.slice(0,11); 
  })

</script>
