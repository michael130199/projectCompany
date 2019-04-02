<?php
class Conexion{
//Aqui creamos un objeto que se encarga de abrir la base de datos

	//Varibles privadas de la clase
	private $user;
	private $clave;
	private $servidor;
	private $conex;
	private $port;
	private $db;

	static public function conectar(){
		$link = new PDO ("pgsql:host=localhost;dbname=E2_Empresa",
			            "postgres",
			            "123456");

		$link->exec("set names utf8");

		return $link;
	}
	//funcion que permite el inicio de la base de datos
	// function conex(){
	// 	$this->user = 'postgres';//Nombre de Usuario postgres
	// 	$this->clave = '123456';//clave de cuyo usuario
	// 	$this->servidor = 'localhost';//mayormente este queda igual
	// 	$this->bd ='E2_Empresa';//La base de datos a la cual te vas a conectar
	// 	$this->port = '5432';//Puerto de entrada (Sale en las configuraciones de postgres) 5432 es el valor por defecto
	// 	$this->conex = ''; //Solo se inicializa para luego guardar la conexion
	// }	

}

?>