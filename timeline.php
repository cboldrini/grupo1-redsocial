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

// print_r($posts[0][4]);
// $post_date = $posts[0][3];





///////////////////////////// NUEVO POST //////////////////////////////////


// echo $id_usr;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$message = $_POST['message'];
	$created_date = date("Y-m-d H:i:s");
	$id_usr = $datos_usr["id"];


	nuevoPost($conexion, $message, $id_usr, $created_date);

}




////////////////////////// LLAMANDO A LA VISTA ////////////////////////////

require_once 'views/timeline.views.php';

?>



