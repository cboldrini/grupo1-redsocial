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




$conv_id = "1";
$mensajes = obtMsjPorConv($conexion, $conv_id, $id_usr);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$message = $_POST['message'];
	$created_date = date("Y-m-d H:i:s");
	$id_usr = $datos_usr["id"];
	$conversation_id = $conv_id;


	nuevoMensaje($conexion, $message, $id_usr, $created_date, $conversation_id);

};


?>

	<?php foreach ($mensajes as $mensaje): ?>

			<div class="wrapper-msg">
				<div class="msg 
					<?php 
						if($mensaje['user_s_id'] != $id_usr){
							echo "received";
						}

						else{
							echo "sent";
						};
					?>
				">
					<div class="wrapper-img">
						<img src="
							<?php 
								if($mensaje['user_s_id'] != $id_usr){
									echo $mensaje['photo'];
								}

								else{
									echo $foto_usr;
								};
							?>
						" alt="">
					</div>
					<div class="wrapper-txt">
						<div class="wrapper-user">
							<span class="user">
								<?php 
									if($mensaje['user_s_id'] != $id_usr){
										echo $mensaje['first_name'] . " " . $mensaje['last_name'];
									}

									else{
										echo $nombre_completo_usr;
									};
								?>
							</span>
						</div>
						<span class="txt">
							<?php echo $mensaje['message'];?>
						</span>
					</div>
					<span class="date-time">
						<?php echo substr($mensaje['created_date'], 11, 5) ;?>
					</span>
				</div>
			</div>

		<?php endforeach; ?>








