<?php 
	require_once 'partials/header_in.php';
 ?>

<section id="profile" class="container-fluid row">

<?php 
	require_once 'partials/menu_left.php';
 ?>


<div class="main col-lg-10 col-md-9 col-sm-9 col-12">
	<div class="user col-md-11 col-12">

		<div class="wrapper-img col-md-2 col-2">
			<img src="<?php echo $foto_usr; ?>" alt="">
		</div>

		<div class="wrapper-txt col-md-10 col-10">
			<p class="user-name"><?php echo $nombre_usr; ?></p>
			<p class="job-title">Coordinador</p>
			<p class="area"><a href="desarrollo.php">Departamento de Desarrollo</a></p>
			<div class="actions">
				<a href="profile_edit.php" class="btn-azul-claro">Editar perfil</a>
			</div>
		</div>
	</div>

	<?php 
	require_once 'partials/posts_filters.php';
 	?>

	<div class="posts col-md-11">
		
		<div class="post">
			<div class="wrapper-img col-lg-1 col-md-2 col-sm-2 col-2">
				<a href="profe_eze.php"><img src="img/eze.png" alt=""></a>
			</div>
			
			<div class="wrapper-txt col-lg-11 col-md-10 col-sm-10 col-10">
				<p class="post-info">
					<a href="profe_eze.php" class="post-user">Profe Eze</a>
					<span class="post-date">21 de Julio de 2019 | 09:35</span>
				</p>
				<p class="post-message">PHP, ¿Qué?</p>
				
				<div class="post-actions">
					<i class="fas fa-thumbs-up"></i>
					<i class="fas fa-reply"></i>
					<i class="fas fa-share-alt"></i>
				</div>
			</div>
			
		</div>

		<div class="post">
			<div class="wrapper-img col-lg-1 col-md-2 col-sm-2 col-2">
				<a href="elisa_carrio.php"><img src="img/carrio.png" alt=""></a>
			</div>
			
			<div class="wrapper-txt col-lg-11 col-md-10 col-sm-10 col-10">
				<p class="post-info">
					<a href="elisa_carrio.php" class="post-user">Elisa Carrio</a>
					<span class="post-date">21 de Julio de 2019 | 09:35</span>
				</p>
				<p class="post-message">Hoy desayunamos en un bar de la zona de Playa Grande, @gmontenegro_ok junto al presidente <a href="mauricio_macri.php">@mauriciomacri</a> y el querido <a href="profile.php">@profe_eze</a>. Comimos medialunas con jamón y queso y como me había quedado con hambre me pedí un tostado de crudo y queso. Ahora me estoy pidiendo unas empanadas por Rappi.</p>
				
				<div class="post-actions">
					<i class="fas fa-thumbs-up"></i>
					<i class="fas fa-reply"></i>
					<i class="fas fa-share-alt"></i>
				</div>
			</div>
			
		</div>

		<div class="post">
			<div class="wrapper-img col-lg-1 col-md-2 col-sm-2 col-2">
				<a href="profe_eze.php"><img src="img/eze.png" alt=""></a>
			</div>
			
			<div class="wrapper-txt col-lg-11 col-md-10 col-sm-10 col-10">
				<p class="post-info">
					<a href="profe_eze.php" class="post-user">Profe Eze</a>
					<span class="post-date">21 de Julio de 2019 | 09:35</span>
				</p>
				<p class="post-message">PHP, ¿Qué?</p>
				
				<div class="post-actions">
					<i class="fas fa-thumbs-up"></i>
					<i class="fas fa-reply"></i>
					<i class="fas fa-share-alt"></i>
				</div>
			</div>
			
		</div>

		<div class="post">
			<div class="wrapper-img col-lg-1 col-md-2 col-sm-2 col-2">
				<a href="profe_eze.php"><img src="img/eze.png" alt=""></a>
			</div>
			
			<div class="wrapper-txt col-lg-11 col-md-10 col-sm-10 col-10">
				<p class="post-info">
					<a href="profe_eze.php" class="post-user">Profe Eze</a>
					<span class="post-date">21 de Julio de 2019 | 09:35</span>
				</p>
				<p class="post-message">PHP, ¿Qué?</p>
				
				<div class="post-actions">
					<i class="fas fa-thumbs-up"></i>
					<i class="fas fa-reply"></i>
					<i class="fas fa-share-alt"></i>
				</div>
			</div>
			
		</div>

		<div class="post">
			<div class="wrapper-img col-lg-1 col-md-2 col-sm-2 col-2">
				<a href="profe_eze.php"><img src="img/eze.png" alt=""></a>
			</div>
			
			<div class="wrapper-txt col-lg-11 col-md-10 col-sm-10 col-10">
				<p class="post-info">
					<a href="profe_eze.php" class="post-user">Profe Eze</a>
					<span class="post-date">21 de Julio de 2019 | 09:35</span>
				</p>
				<p class="post-message">PHP, ¿Qué?</p>
				
				<div class="post-actions">
					<i class="fas fa-thumbs-up"></i>
					<i class="fas fa-reply"></i>
					<i class="fas fa-share-alt"></i>
				</div>
			</div>
			
		</div>

		<div class="post">
			<div class="wrapper-img col-lg-1 col-md-2 col-sm-2 col-2">
				<a href="profe_eze.php"><img src="img/eze.png" alt=""></a>
			</div>
			
			<div class="wrapper-txt col-lg-11 col-md-10 col-sm-10 col-10">
				<p class="post-info">
					<a href="profe_eze.php" class="post-user">Profe Eze</a>
					<span class="post-date">21 de Julio de 2019 | 09:35</span>
				</p>
				<p class="post-message">PHP, ¿Qué?</p>
				
				<div class="post-actions">
					<i class="fas fa-thumbs-up"></i>
					<i class="fas fa-reply"></i>
					<i class="fas fa-share-alt"></i>
				</div>
			</div>
			
		</div>

	</div>
</div>
</section>

<?php 
	require_once 'partials/footer_scripts.php';
 ?>