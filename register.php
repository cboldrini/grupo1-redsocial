<?php session_start();


/////////////// LLAMANDO A LAS CONFIGIGURACIONES GENERALES ////////////////

require_once 'admin/config.php';
require_once 'admin/functions.php';


$conexion = conexion($db_config);





//////////////////////////// VALIDACION DE DATOS //////////////////////////

$errorEmail = "";
$errorNombre = "";
$errorApellido = "";
$errorPassword = "";
$errorPassword2 = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$nombre = $_POST['first_name'];
	$apellido = $_POST['last_name'];
	$emailExistente = emailUsado($conexion, $email);


	if($emailExistente == "1"){
		$errorEmail = "<div class='error'>El email ya está registrado</div>";
	}

	if(!preg_match('/^(?=.{3,18}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/', $nombre)){
    	$errorNombre = "<div class='error'>El nombre debe contener solo espacios y letras.</div>";
		}

	if(!preg_match('/^(?=.{3,18}$)[a-zñA-ZÑ](\s?[a-zñA-ZÑ])*$/', $apellido)){
    	$errorApellido = "<div class='error'>El apellido debe contener solo espacios y letras.</div>";
		}

	if($password != $password2){
		$errorPassword2 = "<div class='error'>Las contraseñas no son iguales.</div>";
	}

	if(!validar_password($password)){
		$errorPassword = "<div class='error'>Las contraseña debe contener al menos un caracter númerico, una mayúscula, una minúscula, y ser de entre 6 y 16 caracteres.</div>";
	}

	else{
		$_SESSION['user'] = $email;
		header('Location: timeline.php');
		nuevoUsuario($conexion, $email, $nombre, $apellido, $password);
	}




}


// prueba($conexion);




////////////////////////// LLAMANDO A LA VISTA ////////////////////////////

require_once 'views/register.views.php';


?>
