<?php

class ControladorClientes{

	/*=============================================
					CREAR CLIENTES
	=============================================*/
	static public function ctrCrearCliente(){
		

		if(isset($_POST["Cedula1"])){

			if(preg_match('/^[#\.\a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]+$/', $_POST["Razon1"]) &&
			   preg_match('/^[0-9]+$/', $_POST["Cedula1"]) &&
			   preg_match('/^[()\-0-9 ]+$/', $_POST["Telefono1"]) && 
			   preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["Domicilio1"])){

			   	$tabla = "cliente";

			   	$datos = array("ci"=>$_POST["Cedula1"],
					           "domicilio"=>$_POST["Domicilio1"],
					           "telf"=>$_POST["Telefono1"],
					           "razon"=>$_POST["Razon1"],
					          	);

			   	echo "hola beba";

			   	$respuesta = ModeloClientes::mdlIngresarCliente($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>
						window.location = "index.php?ruta=cliente";
						alert("Cliente Agregado!!\n Consulte en la Tabla");
					</script>';

				}

			}else{

				echo'<script>

					alert("No se pudo agregar al Cliente\n Vuelva a intentar");
			  	</script>';



			}

		}

	}
	/*=====  End of Crear Cliente  ======*/

	/*=============================================
					MOSTRAR CLIENTES
	=============================================*/

	static public function ctrMostrarClientes($item, $valor){

		$tabla = "cliente";

		$respuesta = ModeloClientes::mdlMostrarClientes($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
					EDITAR CLIENTE
	=============================================*/

	static public function ctrEditarCliente(){
		
		if(isset($_POST["enviar"])){
			
			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["razon_social"]) &&
			   preg_match('/^[0-9]+$/', $_POST["ci_cli"]) &&
			   preg_match('/^[()\-0-9 ]+$/', $_POST["telf"]) && 
			   preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["domicilio"])){

			   	$tabla = "cliente";

			   	$datos = array("ci"=>$_POST["ci_cli"],
					           "domicilio"=>$_POST["domicilio"],
					           "telf"=>$_POST["telf"],
					           "razon"=>$_POST["razon_social"],
					          	);

			   	$respuesta = ModeloClientes::mdlEditarCliente($tabla, $datos);

			   	if($respuesta == "ok"){

					echo '
						<script>
							
							window.location = "index.php?ruta=cliente";
							alert("Cliente Modificado!!\n Consulte en la Tabla");
						</script>';
				}else{
					echo '
						<script>
							alert("Cliente No Modificado!!");
						</script>';
				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El cliente no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
						  }).then((result) => {
							if (result.value) {

							window.location = "index.php?ruta=clientes";

							}
						})

			  	</script>';



			}

		}

	}

	/*=============================================
	ELIMINAR CLIENTE
	=============================================*/

	static public function ctrEliminarCliente(){



		if(isset($_POST["enviar"]) && $_POST["enviar"] == 1){

			$tabla ="cliente";
			$datos = $_POST["ci_cli"];

			$respuesta = ModeloClientes::mdlEliminarCliente($tabla, $datos);
			var_dump($respuesta);

			if($respuesta == "ok"){
				echo '
						<script>
							
							window.location = "index.php?ruta=cliente";
							alert("Cliente Eliminado!!\n Consulte en la Tabla");
						</script>';

			}		

		}

	}

}

