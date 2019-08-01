<?php 

require_once 'admin/config.php';
require_once 'admin/functions.php';



$conexion = conexion($db_config);
$usr = $_SESSION['user'];



comprobarSesion();

if (!$conexion) {
	header('Location: error.php');
}






//////////////////////////////////////////////////////////////////////////
/////////////////////// GUARDANDO DATOS DE USUARIO ///////////////////////
//////////////////////////////////////////////////////////////////////////

$datos_usr = obtenerDatosDeUsuario($conexion, $usr);
$datos_usr = $datos_usr[0];



$id_usr = $datos_usr["id"];
$email_usr = $datos_usr["email"];
$nombre_usr = $datos_usr["first_name"];
$apellido_usr = $datos_usr["last_name"];
$telefono_usr = $datos_usr["phone"];
$nacimiento_usr = $datos_usr["born_date"];

// $foto_usr = $datos_usr["photo"];


// if ($foto_usr != NULL) {
// 	$foto_usr = $datos_usr["photo"];
// }

// else{
// 	$foto_usr = 'img/users/default.png';
// }


if (file_exists('img/users/' . $id_usr . '.png')) {
	$foto_usr = 'img/users/' . $id_usr . '.png';
} else{
	$foto_usr = 'img/users/default.png';
}






?>



