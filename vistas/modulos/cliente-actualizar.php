<div class="container">
<div class="jumbotron my-4">
<h1 class="display-4 ">Cliente</h1>
<hr>
     
      <form role="form" method="POST" class="row justify-content-center">


         <div class="form-group col-5">
            <label for="buscar">Buscar</label>
            <input type="text" class="form-control" id="buscar" name="buscar" placeholder="---------------">
          </div>
          <div class="form-group col-5">
            <label for="opcion">Filtro</label>
            <select class="form-control" name="item" id="opcion" >
              <option selected>...</option>
              <option value="ci_cli">Cedula</option> 
              <option value="domicilio">Domicilio</option> 
              <option value="razon_social">Razon Social</option> 
              <option value="telf">Telefono</option>
            </select>
          </div>
         
          
            <button class="btn btn-success col-3 btn-lg " type="submit">
              Buscar
            </button>
      </form>
     
        <?php 

          if (isset($_POST["item"])) {
            
            $item=$_POST["item"];
            $valor=$_POST["buscar"];

            $_POST = ControladorClientes::ctrMostrarClientes($item,$valor);

            

            if ($_POST != false){
              
              echo '<hr class="p-3">';
              include "cliente-modificar.php";
            }else{

              echo '
                <hr class="p-3">
                <div class="alert alert-danger">No se encontro ningun resultado, vuelve a intentarlo</div>';
            }
          
          }
            
          ?>
    
  </div>
</div>
</div>
</div>