<?php

require_once "conexion.php";

class ModeloClientes{

	/*=============================================
	CREAR CLIENTE
	=============================================*/

	static public function mdlIngresarCliente($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(ci_cli,domicilio,razon_social,telf) VALUES (:ci, :domicilio, :razon, :telf)");

		$stmt->bindParam(":ci", $datos["ci"], PDO::PARAM_STR);
		$stmt->bindParam(":domicilio", $datos["domicilio"], PDO::PARAM_INT);
		$stmt->bindParam(":telf", $datos["telf"], PDO::PARAM_STR);
		$stmt->bindParam(":razon", $datos["razon"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
					MOSTRAR CLIENTES
	=============================================*/

	static public function mdlMostrarClientes($tabla, $item, $valor){

		if($item != null && $valor != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :valor");
			$stmt -> bindParam(":valor", $valor, PDO::PARAM_STR);
			
			$stmt -> execute();

			return $stmt -> fetch();

		}elseif ($item != null && $valor == null){
			$stmt = Conexion::conectar()->prepare("SELECT $item FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}elseif ($item == null && $valor == null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;
	}

	/*=============================================
	EDITAR CLIENTE
	=============================================*/

	static public function mdlEditarCliente($tabla, $datos){

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
	ELIMINAR CLIENTE
	=============================================*/

	static public function mdlEliminarCliente($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE ci_cli = :ci");
		var_dump($datos);
		$stmt->bindParam(":ci", $datos, PDO::PARAM_INT);

		var_dump($stmt -> execute());

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	ACTUALIZAR CLIENTE
	=============================================*/

	static public function mdlActualizarCliente($tabla, $item1, $valor1, $valor){

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