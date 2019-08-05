<?php 
	require_once 'partials/header.php';
 ?>


<section id="register">
	
	<form action="#" method="post" enctype="multipart/form-data" class="col-md-8" id="form-registro">
		<div class="pasos">
			<span class="btn-paso btn-paso1">1</span>
			<span class="btn-paso btn-paso2 not-focus">2</span>
		</div>


		<div class="wrapper-paso1">
			<div class="item">
				<input type="email" name="email" id="email" required autofocus placeholder="Email" maxlength="40" value="<?php if(isset($email)) echo $email ;?>">
				<div id="validacionEmail"></div>
			</div>
			<!-- <?php echo $errorEmail ?> -->
			<div class="item">
				<input type="text" name="first_name" id="nombre" maxlength="24" required  placeholder="Nombre" value="<?php if(isset($nombre)) echo $nombre ;?>">
				<div id="validacionNombre"></div>
			</div>
			<!-- <?php echo $errorNombre ?> -->
			<div class="item">
				<input type="text" name="last_name" id="apellido" maxlength="24" required  placeholder="Apellido" value="<?php if(isset($apellido)) echo $apellido ;?>">
				<div id="validacionApellido"></div>
			</div>
			<!-- <?php echo $errorApellido ?> -->
			<div class="item">
				<input type="password" name="password" maxlength="18" id="password" required  placeholder="Contraseña">
				<div id="validacionPassword"></div>
			</div>
			<!-- <?php echo $errorPassword ?> -->
			<div class="item">
				<input type="password" name="password2" maxlength="18" id="password2" required  placeholder="Repetir contraseña">
				<div id="validacionPassword2"></div>
			</div>
			<!-- <?php echo $errorPassword2 ?> -->
			
			<div class="actions">
				<span class="btn-siguiente"><i class="fas fa-arrow-circle-right disabled" id="btn-siguiente"></i></span>
			</div>
			
		</div>
		
		<div class="wrapper-paso2">
			<label for="file-upload"><i class="fas fa-cloud-upload-alt"></i></label>
			<input type="file" id="file-upload" name="foto" accept=".png" style='display: none;'>
			<div class="actions">
				<span class="btn-anterior"><i class="fas fa-arrow-circle-left"></i></span>
				<button class="btn-azul-claro" id="btn-enviar-registro">ENVIAR</button>
			</div>
		</div>


<!-- 		<label for="file-upload" class="subir">
   				<i class="fas fa-cloud-upload-alt"></i> Subir archivo
			</label>
			<input id="file-upload" onchange='cambiar()' type="file" style='display: none;'/>
			<div id="info"></div>
			<input type="submit" value="Enviar">  -->

		

		
	</form>

</section>


<?php 
	require_once 'partials/footer.php';
 ?>