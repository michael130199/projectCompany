<?php 

require_once "controladores/plantilla_controlador.php";
require_once "controladores/clientes_controlador.php";
require_once "controladores/colaborador_controlador.php";
require_once "controladores/pago_controlador.php";
require_once "controladores/participan_controlador.php";
require_once "controladores/proyecto_controlador.php";
require_once "controladores/tipo_pago_controlador.php";

require_once "modelos/clientes_modelos.php";
require_once "modelos/colaborador_modelos.php";
require_once "modelos/pago_modelos.php";
require_once "modelos/participan_modelos.php";
require_once "modelos/proyecto_modelos.php";
require_once "modelos/tipo_pago_modelos.php";

$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();


