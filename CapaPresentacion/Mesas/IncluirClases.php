<?php
//continuar una sesion iniciada
if(!isset($_SESSION) ){
	session_start();
} 

//Cargar todos los archivos PHP necesarios para la
//ejecucion de la aplicacion
require_once("../../CapaDAO/BaseDAO.php");
require_once("../../CapaDAO/MySqlDAO.php");
require_once("../../CapaDAO/FactoriaDAO.php");


require_once("../../CapaEntidad/EntidadBase.php");
require_once("../../CapaAccesoDatos/MantenimientoBase.php");
require_once("../../CapaBLL/LogicaNegocioMantenimientoBase.php");


require_once("../../CapaEntidad/Mesa.php");
require_once("../../CapaAccesoDatos/Mesa/MesaAccesoDatos.php");
require_once("../../CapaBLL/Mesa/MesaBLL.php");


?>