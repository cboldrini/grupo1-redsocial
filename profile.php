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





///////////////////// OBTENER DATOS DEL AREA ////////////////////

$area = obtenerAreaPorIdUsuario($conexion, $id_usr);
$area_name = $area["area"];
$area_id = $area["id"];


///////////////////// OBTENER POSTS /////////////////////////////

$posts = obtenerPostsPorIdUsuario($conexion,$id_usr);










////////////////////////// LLAMANDO A LA VISTA ////////////////////////////

require_once 'views/profile.views.php';

?>


