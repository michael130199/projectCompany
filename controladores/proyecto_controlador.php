<?php

class ControladorProyectos{

	/*=============================================
					CREAR ProyectoS
	=============================================*/
	static public function ctrCrearProyecto(){
		

		if(isset($_POST["descripcion"])){
			

			//codigo_pro,descripcion, cantidad, fecha_ini, fecha_fin, ci_cli
			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["descripcion"]) && 
			   preg_match('/^[0-9]+$/', $_POST["cantidad"]) && 
			   preg_match('/^[0-9]+$/', $_POST["ci_cli"]) && 
			   preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["fecha-ini"])){

			   	$tabla = "proyecto";

			   	$datos = array("descripcion"=>$_POST["descripcion"],
					           "cantidad"=>$_POST["cantidad"],
					           "fecha_ini"=>$_POST["fecha-ini"],
					           "fecha_fin"=>$_POST["fecha-fin"],
					           "ci_cli"=>$_POST["ci_cli"],
					          	);

			   	$respuesta = ModeloProyectos::mdlIngresarProyecto($tabla, $datos);

			   	if($respuesta == "ok"){

					echo'<script>
						window.location = "index.php?ruta=proyecto";
						alert("Cliente Agregado!!\n Consulte en la Tabla");
					</script>';

				}
				var_dump($respuesta);

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El Proyecto no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
						  }).then((result) => {
							if (result.value) {

							window.location = "Proyectos";

							}
						})

			  	</script>';



			}

		}

	}
	/*=====  End of Crear Proyecto  ======*/

	/*=============================================
					MOSTRAR ProyectoS
	=============================================*/

	static public function ctrMostrarProyectos($item, $valor){

		$tabla = "proyecto";

		$respuesta = ModeloProyectos::mdlMostrarProyectos($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
					EDITAR Proyecto
	=============================================*/

	static public function ctrEditarProyecto(){
		
		if(isset($_POST["enviar"])){
			

			//codigo_pro,descripcion, cantidad, fecha_ini, fecha_fin, ci_cli
			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["descripcion"]) && 
			   preg_match('/^[0-9]+$/', $_POST["cantidad"]) && 
			   preg_match('/^[0-9]+$/', $_POST["ci_cli"]) && 
			   preg_match('/^[#\.\-a-zA-Z0-9 ]+$/', $_POST["fecha-ini"])){
			   	$tabla = "Proyecto";

			   	$datos = array("ci"=>$_POST["ci_cli"],
					           "domicilio"=>$_POST["domicilio"],
					           "telf"=>$_POST["telf"],
					           "razon"=>$_POST["razon_social"],
					          	);

			   	$respuesta = ModeloProyectos::mdlEditarProyecto($tabla, $datos);

			   	if($respuesta == "ok"){

					echo '
						<script>
							
							window.location = "Proyecto";
							alert("Proyecto Modificado!!\n Consulte en la Tabla");
						</script>';
				}else{
					echo '
						<script>
							alert("Proyecto No Modificado!!");
						</script>';
				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El Proyecto no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
						  }).then((result) => {
							if (result.value) {

							window.location = "Proyectos";

							}
						})

			  	</script>';



			}

		}

	}

	/*=============================================
	ELIMINAR Proyecto
	=============================================*/

	static public function ctrEliminarProyecto(){

		if(isset($_POST["enviar"])){

			$tabla ="Proyecto";
			$datos = $_POST["ci_cli"];

			$respuesta = ModeloProyectos::mdlEliminarProyecto($tabla, $datos);

			if($respuesta == "ok"){
				echo '
						<script>
							
							window.location = "Proyecto";
							alert("Proyecto Eliminado!!\n Consulte en la Tabla");
						</script>';

			}		

		}

	}

}

