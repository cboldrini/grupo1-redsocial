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




$area_id = $_GET["area"];

$area = obtenerAreaPorId($conexion, $area_id);
$area_name = $area["name"];
$area_description = $area["description"];
$area_foto = $area["photo"];





////////////////////////// LLAMANDO A LA VISTA ////////////////////////////

require_once 'views/area.views.php';

?>
