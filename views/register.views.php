<?php 
	require_once 'partials/header.php';
 ?>


<section id="register">
	
	<form action="#" method="post" class="col-md-8">
		<input type="email" name="email" required autofocus placeholder="Email">
		<?php echo $errorEmail ?>
		<input type="text" name="first_name" required  placeholder="Nombre">
		<?php echo $errorNombre ?>
		<input type="text" name="last_name" required  placeholder="Apellido">
		<?php echo $errorApellido ?>
		<input type="password" name="password" required  placeholder="Contraseña">
		<?php echo $errorPassword ?>
		<input type="password" name="password2" required  placeholder="Repetir contraseña">
		<?php echo $errorPassword2 ?>
		<button class="btn-azul-claro">ENVIAR</button>
	</form>

</section>


<?php 
	require_once 'partials/footer.php';
 ?>