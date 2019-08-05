<?php session_start();


/////////////// LLAMANDO A LAS CONFIGIGURACIONES GENERALES ////////////////

require_once 'admin/config.php';
require_once 'admin/functions.php';
require_once 'admin/variables.php';

$usuario = $_SESSION['user'];


$conexion = conexion($db_config);

comprobarSesion();

if (!$conexion) {
	header('Location: error.php');
}


//////////////////////// OBTENER CONVERSACIONES ///////////////////////////

$conversaciones = obtConvPorUsr($conexion,$id_usr);


$conv_id = "1";
$mensajes = obtMsjPorConv($conexion, $conv_id, $id_usr);

// print_r($mensajes);

// print_r($conversaciones);






////////////////////////// LLAMANDO A LA VISTA ////////////////////////////

require_once 'views/chat.views.php';

?>