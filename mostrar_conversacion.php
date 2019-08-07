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




$conv_id = $_POST['idConversacion'];
$mensajes = obtMsjPorConv($conexion, $conv_id, $id_usr);


?>




	<div class="contact">

		
		<div class="wrapper-img">
			<img src="<?php echo $mensajes[0]['photo'];?>" alt="">
		</div>
		

		<div class="wrapper-txt">
			<span class="contact-name">
				<?php echo $mensajes[0]['first_name'] . " " . $mensajes[0]['last_name'];?>
			</span>
		</div>

	</div>


	<div class="messages" id="recargar-mensajes">

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

		
	</div>

	

	<div class="new-msg">
		<form id="new-msg" method="post">
			<input class="col-lg-8 col-md-8 col-sm-8" type="text" name="message" id="message" placeholder="Escribe un nuevo mensaje">
			<button><i class="fas fa-plus"></i></button>
		</form>

	</div>








