<?php session_start();


/////////////// LLAMANDO A LAS CONFIGIGURACIONES GENERALES ////////////////

require_once 'admin/config.php';
require_once 'admin/functions.php';
// require_once 'admin/variables.php';


$conexion = conexion($db_config);




//////////////////////////// VALIDACION DE LOGIN //////////////////////////

$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['usuario'])) {
	$email = $_POST['usuario'];
	$password = $_POST['password'];
	$emailExistente = emailUsado($conexion, $email);


	if($emailExistente == "1"){
		$passwordReal = obtenerPassword($conexion, $email);
		$passwordReal = $passwordReal[0][0];
		$result = password_verify($password, $passwordReal);

	    if($result == true) {
			$_SESSION['user'] = $email;
			header('Location: timeline.php');
		}

		else{
			$error = "<div class='error'>La contraseña es incorrecta</div>";
		}
	} 

	else{
	     $error = "<div class='error'>El usuario no está registrado</div>";
	}

}







////////////////////////// LLAMANDO A LA VISTA ////////////////////////////

require_once 'views/index.views.php';


?>

