<?php session_start();


/////////////// LLAMANDO A LAS CONFIGIGURACIONES GENERALES ////////////////

require_once 'admin/config.php';
require_once 'admin/functions.php';
require_once 'admin/variables.php';

$conexion = conexion($db_config);

comprobarSesion();

if (!$conexion) {
	header('Location: error.php');
}






////////////////////////// LLAMANDO A LA VISTA ////////////////////////////

require_once 'views/groups.views.php';

?>