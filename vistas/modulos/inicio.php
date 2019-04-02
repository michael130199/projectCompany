<section class="container-fluid inicio text-white d-flex flex-column align-items-center py-5" >
	<div class="text-center my-4">
		<h3 class="hidden-xs-down d-none d-md-block">Agrega, Actualiza, Busca y Elimina</h3>
		<h1 class="display-4 my-4">Bienvenido</h1>
		<p class="lead hidden-xs-down d-none d-sm-block">Acceda a las diferentes funcionalidades!</p>
	</div>
</section>

<section class="container-fluid cuerpo">
	<div class="row">
		<div class="col-12 col-lg-6 color">
			<?php 
				require 'proyecto-j.php';
			 ?>
		</div>
		<div class="col-12 col-lg-6">
			<?php 
				require 'cliente-j.php';
			 ?>
		</div>
		<div class="col-12 col-lg-6 color">
			<div class="jumbotron mt-4">
			  <h1 class="display-4">Pagos</h1>
			  <hr class="my-4">
			  <ul class="list-group list-group-flush">
			    <li class="list-group-item d-flex justify-content-between">
			        Ingresar Nuevos Pagos.
			        <a href="#" class="btn btn-warning">Agregar</a>
			    </li>
			    <li class="list-group-item d-flex justify-content-between">
			        Actualizar los Pagos Existente.
			        <a href="#" class="btn btn-warning">Actualizar</a>
			    </li>
			    <li class="list-group-item d-flex justify-content-between">
			        Buscar por filtro.
			        <a href="#" class="btn btn-warning">Buscar</a>
			    </li>
			    <li class="list-group-item d-flex justify-content-between">
			        Eliminar algun Pagos.
			        <a href="#" class="btn btn-danger">Eliminar</a>
			    </li>
			  </ul>
			</div>
		</div>
		<div class="col-12 col-lg-6">
			<div class="jumbotron mt-4 color text-white">
			  <h1 class="display-4">Colaboradores</h1>
			  <hr class="my-4">
			  <ul class="list-group list-group-flush text-dark">
			    <li class="list-group-item d-flex justify-content-between">
			    	Ingresar Nuevos Colaboradores.
			    	<a href="#" class="btn btn-warning">Agregar</a>
			    </li>
			    <li class="list-group-item d-flex justify-content-between">
			    	Actualizar los Colaboradores Existente.
			    	<a href="#" class="btn btn-warning">Actualizar</a>
			    </li>
			    <li class="list-group-item d-flex justify-content-between">
			    	Buscar por filtro.
			    	<a href="#" class="btn btn-warning">Buscar</a>
			    </li>
			    <li class="list-group-item d-flex justify-content-between">
			    	Eliminar algun Colaboradores.
			    	<a href="#" class="btn btn-danger">Eliminar</a>
			    </li>
			  </ul>
			</div>
		</div>
	</div>
</section>
