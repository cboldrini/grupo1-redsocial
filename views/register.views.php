<?php 
	require_once 'partials/header.php';
 ?>


<section id="register">
	
	<form action="#" method="post" enctype="multipart/form-data" class="col-md-8">
		<div class="pasos">
			<span class="btn-paso btn-paso1">1</span>
			<span class="btn-paso btn-paso2 not-focus">2</span>
		</div>


		<div class="wrapper-paso1">
			<input type="email" name="email" required autofocus placeholder="Email" value="<?php if(isset($email)) echo $email ;?>">
			<?php echo $errorEmail ?>
			<input type="text" name="first_name" required  placeholder="Nombre" value="<?php if(isset($nombre)) echo $nombre ;?>">
			<?php echo $errorNombre ?>
			<input type="text" name="last_name" required  placeholder="Apellido" value="<?php if(isset($apellido)) echo $apellido ;?>">
			<?php echo $errorApellido ?>
			<input type="password" name="password" required  placeholder="Contraseña">
			<?php echo $errorPassword ?>
			<input type="password" name="password2" required  placeholder="Repetir contraseña">
			<?php echo $errorPassword2 ?>
			
			<div class="actions">
				<span class="btn-azul-claro btn-siguiente">SIGUIENTE</span>
			</div>
			
		</div>
		
		<div class="wrapper-paso2">
			<input type="file" name="foto" accept=".png">
			<div class="actions">
				<span class="btn-azul-claro btn-anterior">ANTERIOR</span>
				<button class="btn-azul-claro">ENVIAR</button>
			</div>
		</div>

		

		
	</form>

</section>


<?php 
	require_once 'partials/footer.php';
 ?>