<?php session_start();


/////////////// LLAMANDO A LAS CONFIGIGURACIONES GENERALES ////////////////

require_once 'admin/config.php';
require_once 'admin/functions.php';
require_once 'admin/variables.php';


$conexion = conexion($db_config);

// $prueba = $_POST['message'];

// echo $prueba;

// echo "Respuesta recibida";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$message = $_POST['message'];
	$created_date = date("Y-m-d H:i:s");
	$id_usr = $datos_usr["id"];

	nuevoPost($conexion, $message, $id_usr, $created_date);
}









 ?>