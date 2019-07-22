<?php 
	require_once 'partials/header_in.php';
 ?>

<section id="profile" class="container-fluid row">

	<div class="container user col-md-10">

		<div class="wrapper-img col-md-1">
			<img src="img/macri.png" alt="">
		</div>

		<div class="wrapper-txt col-md-10">
			<p class="user">Mauricio Macri</p>
			<p class="job-title">Presidente de la Nación</p>
			<p class="area">Poder Ejecutivo</p>
			<div class="actions">
				<i class="fas fa-envelope"></i>
				<i class="fas fa-comment"></i>
				<i class="fab fa-skype"></i>
				<i class="fas fa-phone"></i>
			</div>
		</div>
	</div>

	<div class="container filters col-md-10">
		<ul>
			<li><a href="#">Todos</a></li>
			<li><a href="#">Institucionales</a></li>
			<li><a href="#">Grupos</a></li>
			<li><a href="#">Seguidos</a></li>
			<li><a href="#">Seguidores</a></li>
		</ul>
	</div>

	<div class="container posts col-md-10">
		
		<div class="post">
			<div class="wrapper-img col-md-1 col-2 col-sm-2">
				<img src="img/macri.png" alt="">
			</div>
			
			<div class="wrapper-txt col-md-11 col-10 col-sm-10">
				<p class="post-info">
					<a href="#" class="post-user">Mauricio Macri</a>
					<span class="post-date">21 de Julio de 2019 | 09:35</span>
				</p>
				<p class="post-message">Permuto sillón de Rivadavia (casi sin uso) por helicoptero. Consultas por inbox.</p>
				
				<div class="post-actions">
					<i class="fas fa-thumbs-up"></i>
					<i class="fas fa-reply"></i>
					<i class="fas fa-share-alt"></i>
				</div>
			</div>
			
		</div>

		<div class="post">
			<div class="wrapper-img col-md-1 col-2 col-sm-2">
				<img src="img/cristina.png" alt="">
			</div>
			
			<div class="wrapper-txt col-md-11 col-10 col-sm-10">
				<p class="post-info">
					<a href="#" class="post-user">Cristina Fernandez</a>
					<span class="post-date">21 de Julio de 2019 | 09:35</span>
				</p>
				<p class="post-message">Vamos a volver.</p>
				
				<div class="post-actions">
					<i class="fas fa-thumbs-up"></i>
					<i class="fas fa-reply"></i>
					<i class="fas fa-share-alt"></i>
				</div>
			</div>
			
		</div>

		<div class="post">
			<div class="wrapper-img col-md-1 col-2 col-sm-2">
				<img src="img/lionel.png" alt="">
			</div>
			
			<div class="wrapper-txt col-md-11 col-10 col-sm-10">
				<p class="post-info">
					<a href="#" class="post-user">Lionel Ricchie</a>
					<span class="post-date">21 de Julio de 2019 | 09:35</span>
				</p>
				<p class="post-message">No te olvides de poner el where en el delete from.</p>
				
				<div class="post-actions">
					<i class="fas fa-thumbs-up"></i>
					<i class="fas fa-reply"></i>
					<i class="fas fa-share-alt"></i>
				</div>
			</div>
			
		</div>

		<div class="post">
			<div class="wrapper-img col-md-1 col-2 col-sm-2">
				<img src="img/carrio.png" alt="">
			</div>
			
			<div class="wrapper-txt col-md-11 col-10 col-sm-10">
				<p class="post-info">
					<a href="#" class="post-user">Elisa Carrio</a>
					<span class="post-date">21 de Julio de 2019 | 09:35</span>
				</p>
				<p class="post-message">Hoy desayunamos en un bar de la zona de Playa Grande, @gmontenegro_ok junto al dip. @JnmLopez, el senador @AndresDeLeo, las candidatas a dip. nacionales @MarianStil y @monicafrade2, la concejal Angélica González y la candidata a concejal por #MarDelPlata Liliana Gonzalorena.</p>
				
				<div class="post-actions">
					<i class="fas fa-thumbs-up"></i>
					<i class="fas fa-reply"></i>
					<i class="fas fa-share-alt"></i>
				</div>
			</div>
			
		</div>

	</div>

</section>

 <?php 
	require_once 'partials/footer_in.php';
 ?>