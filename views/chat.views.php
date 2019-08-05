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
			
			<div class="contact">
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
		

	</div>

</div>


<div class="conversation col-lg-9 col-md-8 col-sm-8">
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


	<div class="messages">

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

		<!-- <div class="wrapper-msg">
			<div class="msg sent">
				<div class="wrapper-img">
					<img src="img/users/1.png" alt="">
				</div>
				<div class="wrapper-txt">
					<div class="wrapper-user">
						<span class="user">Francisco Alberio</span>
					</div>
					<span class="txt">Qué onda wacho?</span>
				</div>
				<span class="date-time">19:21</span>
			</div>
		</div>

		<div class="wrapper-msg">
			<div class="msg received">
				<div class="wrapper-img">
					<img src="img/users/2.png" alt="">
				</div>
				<div class="wrapper-txt">
					<div class="wrapper-user">
						<span class="user">Cristian Boldrini</span>
					</div>
					<span class="txt">Acá andamos, vos? Pudiste ver eso?</span>
				</div>
				<span class="date-time">19:21</span>
			</div>
		</div>

		<div class="wrapper-msg">
			<div class="msg received">
				<div class="wrapper-img">
					<img src="img/users/2.png" alt="">
				</div>
				<div class="wrapper-txt">
					<div class="wrapper-user">
						<span class="user">Cristian Boldrini</span>
					</div>
					<span class="txt">Estoy en eso... </span>
				</div>
				<span class="date-time">19:21</span>
			</div>
		</div>

		<div class="wrapper-msg">
			<div class="msg sent">
				<div class="wrapper-img">
					<img src="img/users/1.png" alt="">
				</div>
				<div class="wrapper-txt">
					<div class="wrapper-user">
						<span class="user">Francisco Alberio</span>
					</div>
					<span class="txt">Che, vos tenés idea como se puede hacer para darle funcionalidad a un chat? Se me está quemando la cabeza!</span>
				</div>
				<span class="date-time">19:21</span>
			</div>
		</div>

		<div class="wrapper-msg">
			<div class="msg sent">
				<div class="wrapper-img">
					<img src="img/users/1.png" alt="">
				</div>
				<div class="wrapper-txt">
					<div class="wrapper-user">
						<span class="user">Francisco Alberio</span>
					</div>
					<span class="txt">Che, vos tenés idea como se puede hacer para darle funcionalidad a un chat? Se me está quemando la cabeza!</span>
				</div>
				<span class="date-time">19:21</span>
			</div>
		</div>

		<div class="wrapper-msg">
			<div class="msg received">
				<div class="wrapper-img">
					<img src="img/users/2.png" alt="">
				</div>
				<div class="wrapper-txt">
					<div class="wrapper-user">
						<span class="user">Cristian Boldrini</span>
					</div>
					<span class="txt">Mmm no ni idea... pero no te enroques al pedo. Para qué queres un chat?</span>
				</div>
				<span class="date-time">19:21</span>
			</div>
		</div>

		<div class="wrapper-msg">
			<div class="msg sent">
				<div class="wrapper-img">
					<img src="img/users/1.png" alt="">
				</div>
				<div class="wrapper-txt">
					<div class="wrapper-user">
						<span class="user">Francisco Alberio</span>
					</div>
					<span class="txt">Che, vos tenés idea como se puede hacer para darle funcionalidad a un chat? Se me está quemando la cabeza!</span>
				</div>
				<span class="date-time">19:21</span>
			</div>
		</div>

		<div class="wrapper-msg">
			<div class="msg received">
				<div class="wrapper-img">
					<img src="img/users/2.png" alt="">
				</div>
				<div class="wrapper-txt">
					<div class="wrapper-user">
						<span class="user">Cristian Boldrini</span>
					</div>
					<span class="txt">Mmm no ni idea... pero no te enroques al pedo. Para qué queres un chat?</span>
				</div>
				<span class="date-time">19:21</span>
			</div>
		</div> -->


	</div>

	

	<div class="new-msg">
		<input class="col-lg-8 col-md-8 col-sm-8" type="text" placeholder="Escribe un nuevo mensaje">
	</div>

</div>


	
		

	



</section>

<?php 
	require_once 'partials/footer_scripts.php';
 ?>