<?php

require_once "conexion.php";

class ModeloProyectos{

	/*=============================================
	CREAR Proyecto
	=============================================*/

	static public function mdlIngresarProyecto($tabla, $datos){
		var_dump($datos);

		//codigo_pro,descripcion, cantidad, fecha_ini, fecha_fin, ci_cli
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(descripcion, cantidad, fecha_ini, fecha_fin, ci_cli) VALUES (:descripcion, :cantidad, :fecha_ini, :fecha_fin, :ci_cli)");

		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":cantidad", $datos["cantidad"], PDO::PARAM_INT);
		$stmt->bindParam(":fecha_ini", $datos["fecha_ini"]);
		$stmt->bindParam(":fecha_fin", $datos["fecha_fin"]);
		$stmt->bindParam(":ci_cli", $datos["ci_cli"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
					MOSTRAR ProyectoS
	=============================================*/

	static public function mdlMostrarProyectos($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :valor");
			$stmt -> bindParam(":valor", $valor, PDO::PARAM_STR);
			
			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;
	}

	/*=============================================
	EDITAR Proyecto
	=============================================*/

	static public function mdlEditarProyecto($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET ci_cli = :ci ,domicilio = :domicilio ,razon_social = :razon ,telf = :telf WHERE ci_cli = :ci1");

		$stmt->bindParam(":ci", $datos["ci"], PDO::PARAM_STR);
		$stmt->bindParam(":domicilio", $datos["domicilio"], PDO::PARAM_INT);
		$stmt->bindParam(":telf", $datos["telf"], PDO::PARAM_STR);
		$stmt->bindParam(":razon", $datos["razon"], PDO::PARAM_STR);
		$stmt->bindParam(":ci1", $datos["ci"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	ELIMINAR Proyecto
	=============================================*/

	static public function mdlEliminarProyecto($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE ci_cli = :ci");

		$stmt->bindParam(":ci", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	ACTUALIZAR Proyecto
	=============================================*/

	static public function mdlActualizarProyecto($tabla, $item1, $valor1, $valor){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE id = :id");

		$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
		$stmt -> bindParam(":id", $valor, PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

}