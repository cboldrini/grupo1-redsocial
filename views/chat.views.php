<?php 
	require_once 'partials/header_in.php';
 ?>

<section id="chat" class="container-fluid row">

<div class="menu-contacts col-lg-3 col-md-4 col-sm-4 col-12">

	<div class="busqueda col-lg-3 col-md-4 col-sm-4">
		<input type="text" placeholder="Buscar">
	</div>

	
	<div class="contacts col-lg-3 col-md-4 col-sm-4 col-12">

		<?php foreach ($conversaciones as $conversacion): ?>
			
			<div class="conv-contact" id="<?php echo $conversacion['conversation_id']; ?>">
				<div class="wrapper-img">
					<div class="img">
						<img src="<?php echo $conversacion['photo'];?>" alt="">
					</div>
				</div>

				<div class="wrapper-txt">
					<div class="top">
						<span class="contact-name">
							<?php echo $conversacion['first_name'] . " " . $conversacion['last_name'];?>
						</span>
						<span class="date-time">19:21</span>
					</div>
					<div class="bottom">
						<span class="last-message">
							<?php echo $conversacion['message'];?>
						</span>
					</div>

				
					
				</div>
			</div>

		<?php endforeach; ?>

		<?php foreach ($contacts as $contact): ?>
			
			<div class="conv-contact" id="<?php echo $contact['conversation_id']; ?>">
				<div class="wrapper-img">
					<div class="img">
						<img src="<?php echo $contact['photo'];?>" alt="">
					</div>
				</div>

				<div class="wrapper-txt">
					<div class="top">
						<span class="contact-name">
							<?php echo $contact['first_name'] . " " . $contact['last_name'];?>
						</span>
						<span class="date-time">19:21</span>
					</div>
					<div class="bottom">
						<span class="last-message">
							
						</span>
					</div>

				
					
				</div>
			</div>

		<?php endforeach; ?>
		

	</div>

</div>


<div class="conversation col-lg-9 col-md-8 col-sm-8" id="conversation">
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
			<button><i class="fas fa-paper-plane"></i></button>
		</form>

	</div>

	
</div>


	
		

	



</section>

<?php 
	require_once 'partials/footer_scripts.php';
 ?>