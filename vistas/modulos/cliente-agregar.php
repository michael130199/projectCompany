<div class="container-fluid"> 

<div class="container py-5 my-5">
<h2 class="display-4 text-center mb-5 ">Agregar Nuevo Cliente</h2>
<form class="form-row justify-content-center" method="POST">
  <div class="col-md-3 mb-3">
    <label for="Cedula1">Cedula</label>
    <input type="number" class="form-control" id="Cedula1" name="Cedula1" placeholder="00.000.000" max=350000000 required>
  </div>
  <div class="col-md-3 mb-3">
    <label for="Telefono1">Numero de Telefono</label>
    <input type="number" class="form-control" id="Telefono1" name="Telefono1" placeholder="0000-000-0000" required>
  </div>
  <div class="col-md-3 mb-3">
    <label for="Domicilio1">Domicilio</label>
    <textarea class="form-control" id="Domicilio1" name="Domicilio1" rows="3" required></textarea>
  </div>
  <div class="col-md-3 mb-3">
    <label for="Razon1">Razon Social</label>
    <input type="text" class="form-control" id="Razon1" name="Razon1" placeholder="Empresa | *** | Entidad" required>
  </div>
  
  <div class="col col-4 align-self-center"> 
    <button class="btn btn-primary btn-lg btn-block" type="submit">Guardar</button>
  </div>
  <?php
      $crearUsuario = new ControladorClientes();
      $crearUsuario->ctrCrearCliente();
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