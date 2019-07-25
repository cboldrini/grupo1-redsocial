<?php 
	require_once 'partials/header_in.php';
 ?>

<section id="group" class="container-fluid row">

<?php 
	require_once 'partials/menu_left.php';
 ?>


<div class="main col-lg-10 col-md-9 col-sm-9 col-12">

	<div class="group col-md-11">

		<div class="wrapper-img col-md-2 col-2">
			<img src="img/finanzas.png" alt="">
		</div>

		<div class="wrapper-txt col-md-10 col-10">
			<p class="name">Finanzas</p>
			<p class="description">Departamento de Finanzas</p>
			<a href="" class="members">12 <i class="fas fa-users"></i></a>
			<div class="actions">
				<i class="fas fa-envelope"></i>
				<i class="fas fa-comment"></i>
				<i class="fab fa-skype"></i>
				<i class="fas fa-handshake"></i>
			</div>
		</div>
	</div>

	<div class="filters col-md-11">
		<ul>
			<li><a href="#">Miembros</a></li>
			<li><a href="#">Posts</a></li>
			<li><a href="#">Menciones</a></li>
			<li><a href="#">Artículos</a></li>
			<li><a href="#">Seguidores</a></li>
		</ul>
	</div>

	<div class="container members col-md-11">
	
		<div class="member">
			<div class="wrapper-img col-lg-1 col-md-2 col-sm-2 col-2">
				<img src="img/macri.png" alt="">
			</div>
			
			<div class="wrapper-txt col-lg-11 col-md-10 col-sm-10 col-10">
				<p class="info">
					<a href="mauricio_macri.php" class="user-name">Mauricio Macri</a>
				</p>
				<p class="job-title">Presidente de la Nación<span class="separator">|</span><span class="area">Poder Ejecutivo</span></p>
				
				<div class="actions">
					<i class="fas fa-envelope"></i>
					<i class="fas fa-comment"></i>
					<i class="fab fa-skype"></i>
					<i class="fas fa-phone"></i>
				</div>
			</div>
			
		</div>

		<div class="member">
			<div class="wrapper-img col-md-1 col-2 col-sm-2">
				<img src="img/cristina.png" alt="">
			</div>
			
			<div class="wrapper-txt col-md-11 col-10 col-sm-10">
				<p class="info">
					<a href="cristina_fernandez.php" class="user-name">Cristina Fernandez</a>
				</p>
				<p class="job-title">Senadora de la Nación<span class="separator">|</span><span class="area">Poder Legislativo</span></p>
				
				<div class="actions">
					<i class="fas fa-envelope"></i>
					<i class="fas fa-comment"></i>
					<i class="fab fa-skype"></i>
					<i class="fas fa-phone"></i>
				</div>
			</div>
			
		</div>

		<div class="member">
			<div class="wrapper-img col-md-1 col-2 col-sm-2">
				<img src="img/carrio.png" alt="">
			</div>
			
			<div class="wrapper-txt col-md-11 col-10 col-sm-10">
				<p class="info">
					<a href="elisa_carrio.php" class="user-name">Elisa Carrio</a>
				</p>
				<p class="job-title">Diputada de la Nación<span class="separator">|</span><span class="area">Poder Legislativo</span></p>
				
				<div class="actions">
					<i class="fas fa-envelope"></i>
					<i class="fas fa-comment"></i>
					<i class="fab fa-skype"></i>
					<i class="fas fa-phone"></i>
				</div>
			</div>
			
		</div>

		<div class="member">
			<div class="wrapper-img col-md-1 col-2 col-sm-2">
				<img src="img/lionel.png" alt="">
			</div>
			
			<div class="wrapper-txt col-md-11 col-10 col-sm-10">
				<p class="info">
					<a href="lionel_richie.php" class="user-name">Lionel Richie</a>
				</p>
				<p class="job-title">Cantautor<span class="separator">|</span><span class="area">SONY Music</span></p>
				
				<div class="actions">
					<i class="fas fa-envelope"></i>
					<i class="fas fa-comment"></i>
					<i class="fab fa-skype"></i>
					<i class="fas fa-phone"></i>
				</div>
			</div>
			
		</div>

	</div>	


</div>

</section>

<?php 
	require_once 'partials/footer_scripts.php';
 ?>