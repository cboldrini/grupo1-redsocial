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

$idUsuario = $_GET["user"];



$usuario = obtenerDatosDeUsuarioPorId($conexion, $idUsuario);
$area = obtenerAreaPorIdUsuario($conexion, $idUsuario);
$posts = obtenerPostsPorIdUsuario($conexion,$idUsuario);


$nombre = $usuario["first_name"];
$apellido = $usuario["last_name"];
$email = $usuario["email"];
$foto = $usuario["photo"];
$nombreCompleto = $nombre ." " . $apellido;
$area_id = $area["id"];
$area = $area["area"];










////////////////////////// LLAMANDO A LA VISTA ////////////////////////////

require_once 'views/contact.views.php';

?>
