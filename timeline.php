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


$posts = obtenerPosts($conexion);





////////////////////////// LLAMANDO A LA VISTA ////////////////////////////

require_once 'views/timeline.views.php';

?>



