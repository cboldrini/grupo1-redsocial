<?php 
	require_once 'partials/header_in.php';
 ?>

<section id="profile_edit" class="container-fluid row">

<?php 
	require_once 'partials/menu_left.php';
 ?>


<div class="main col-lg-10 col-md-9 col-sm-9 col-12">

	
	
	<div class="container wrapper-profile col-12">
		<div class="column-1 col-lg-3 col-6">
			<div class="wrapper-img">
				<div class="photo-change">
					<p><a href=""><i class="fas fa-camera"></i>Cambiar foto</a></p>
					<p><a href=""><i class="fas fa-camera"></i></a></p>
				</div>
				<img src="<?php echo $foto_usr; ?>" alt="">
			</div>

			<div class="wrapper-txt">
				<ul>
					<li><?php echo $nombre_usr; ?><a class="edit" href=""><i class="fas fa-pencil-alt"></i></a></li>
					<li>Desarrollo<a class="edit" href=""><i class="fas fa-pencil-alt"></i></a></li>
					<li><a href="">Aprendiz</a><a class="edit" href=""><i class="fas fa-pencil-alt"></i></a></li>
				</ul>
			</div>
		
		</div>


		<div class="column-2 col-lg-9 col-12">
			<div class="filters col-md-12 col-sm-12 col-12">
				<ul>
					<li id="btn_datos_personales"><a href="#">Datos personales</a></li>
					<li id="btn_datos_contacto"><a href="#">Contacto</a></li>
					<li id="btn_datos_intereses"><a href="#">Intereses</a></li>
					<li id="btn_datos_grupos"><a href="#">Grupos</a></li>
					<li id="btn_datos_proyectos"><a href="#">Proyectos</a></li>
					<li id="btn_datos_configuracion"><a href="#">Configuración</a></li>
				</ul>
			</div>

			<div class="datos datos-personales col-md-12">
				
				<div class="dato">
					<p class="label col-md-4">Nombre</p>
					<p class="value col-md-6"><?php echo $nombre_usr; ?></p>
					<a href=""><i class="fas fa-pencil-alt"></i>Editar</a>
				</div>

				<div class="dato">
					<p class="label col-md-4">Apellido</p>
					<p class="value col-md-6"><?php echo $apellido_usr; ?></p>
					<a href=""><i class="fas fa-pencil-alt"></i>Editar</a>
				</div>

				<div class="dato">
					<p class="label col-md-4">Sexo</p>
					<p class="value col-md-6">Hombre</p>
					<a href=""><i class="fas fa-pencil-alt"></i>Editar</a>
				</div>

				<div class="dato">
					<p class="label col-md-4">Fecha de nacimiento</p>
					<p class="value col-md-6">17 de Octubre</p>
					<a href=""><i class="fas fa-pencil-alt"></i>Editar</a>
				</div>

				<div class="dato">
					<p class="label col-md-4">Año de nacimiento</p>
					<p class="value col-md-6">1986</p>
					<a href=""><i class="fas fa-pencil-alt"></i>Editar</a>
				</div>

			</div>

			<div class="datos datos-contacto col-md-12">
				
				<div class="dato">
					<p class="label col-md-4">Teléfono:</p>
					<p class="value col-md-6"><?php echo $telefono_usr; ?></p>
					<a href=""><i class="fas fa-pencil-alt"></i>Editar</a>
				</div>

				<div class="dato">
					<p class="label col-md-4">Domicilio</p>
					<p class="value col-md-6">Av. Monroe 860, Buenos Aires</p>
					<a href=""><i class="fas fa-pencil-alt"></i>Editar</a>
				</div>

				<div class="dato">
					<p class="label col-md-4">Email</p>
					<p class="value col-md-6"><?php echo $email_usr; ?></p>
					<a href=""><i class="fas fa-pencil-alt"></i>Editar</a>
				</div>

			</div>

			<div class="datos datos-intereses col-md-12">
				
				<div class="dato">
					<p class="label col-md-10">JavaScript</p>
					<a class="edit-exit" href=""><i class="fas fa-trash"></i>Eliminar</a>
				</div>

				<div class="dato">
					<p class="label col-md-10">HTML</p>
					<a class="edit-exit" href=""><i class="fas fa-trash"></i>Eliminar</a>
				</div>

				<div class="dato">
					<p class="label col-md-10">Desarrollo</p>
					<a class="edit-exit" href=""><i class="fas fa-trash"></i>Eliminar</a>
				</div>

				<div class="dato">
					<p class="label col-md-10">Inglés</p>
					<a class="edit-exit" href=""><i class="fas fa-trash"></i>Eliminar</a>
				</div>

				<div class="dato">
					<p class="label col-md-10">PHP</p>
					<a class="edit-exit" href=""><i class="fas fa-trash"></i>Eliminar</a>
				</div>

				<div class="dato">
					<p class="label col-md-10">MySQL</p>
					<a class="edit-exit" href=""><i class="fas fa-trash"></i>Eliminar</a>
				</div>

				<div class="dato">
					<p class="label col-md-10">Laravel</p>
					<a class="edit-exit" href=""><i class="fas fa-trash"></i>Eliminar</a>
				</div>

				<div class="dato">
					<p class="label col-md-10">React</p>
					<a class="edit-exit" href=""><i class="fas fa-trash"></i>Eliminar</a>
				</div>

			</div>

			<div class="datos datos-grupos col-md-12">
				
				<div class="dato">
					<p class="label col-md-10">Desarrollo</p>
					<a class="edit-exit" href=""><i class="fas fa-times-circle"></i>Abandonar</a>
				</div>

				<div class="dato">
					<p class="label col-md-10">Transformación Digital</p>
					<a class="edit-exit" href=""><i class="fas fa-times-circle"></i>Abandonar</a>
				</div>

				<div class="dato">
					<p class="label col-md-10">Coordinadores</p>
					<a class="edit-exit" href=""><i class="fas fa-times-circle"></i>Abandonar</a>
				</div>

				<div class="dato">
					<p class="label col-md-10">Comisión de Diversidad e Igualdad de género</p>
					<a class="edit-exit" href=""><i class="fas fa-times-circle"></i>Abandonar</a>
				</div>

			</div>


			<div class="datos datos-proyectos col-md-12">
				
				

			</div>


			<div class="datos datos-configuracion col-md-12">
				
				

			</div>




		</div>
	</div>
	
</div>

</section>

<?php 
	require_once 'partials/footer_scripts.php';
 ?>