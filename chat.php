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

// $conv_id = $_POST['idConversacion'];
$conv_id = "1";
$mensajes = obtMsjPorConv($conexion, $conv_id, $id_usr);

$contacts = obtCtcs($conexion, $id_usr);



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if(isset($message)){
		$message = $_POST['message'];
		$created_date = date("Y-m-d H:i:s");
		$id_usr = $datos_usr["id"];
		$conversation_id = $conv_id;


		nuevoMensaje($conexion, $message, $id_usr, $created_date, $conversation_id);
	} 

};






////////////////////////// LLAMANDO A LA VISTA ////////////////////////////

require_once 'views/chat.views.php';

?>