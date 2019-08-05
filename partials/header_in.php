<!-------------------------------------------------------------------------------------------
----------------------------------------- HEAD  ---------------------------------------------
 -------------------------------------------------------------------------------------------->


<?php 
	require_once 'partials/head.php';
 ?>



<!-------------------------------------------------------------------------------------------
-------------------------------------------- BODY  ------------------------------------------
 -------------------------------------------------------------------------------------------->


<body>



<!-------------------------------------------------------------------------------------------
------------------------------------------- HEADER  -----------------------------------------
 -------------------------------------------------------------------------------------------->


<header class="header-in container-fluid row">
	<div class="logo col-md-2 col-sm-4 col-4"><a href="timeline.php">INSIDE</a></div>
	<div class="menu col-md-6">
		<nav>
			<ul>
				<li><a href="timeline.php"><p>TIMELINE</p></a></li>
				<li><a href="contacts.php"><p>CONTACTOS</p></a></li>
				<li><a href="groups.php"><p>GRUPOS</p></a></li>
				<li><a href="wiki.php"><p>WIKI</p></a></li>
				<li><a href="chat.php"><p>CHAT</p></a></li>
				<li class="btn-menu-profile"><img class="user" src="<?php echo $foto_usr; ?>" alt=""></li>
				<li>
					<div id="wrp-change-theme">
						<div id="btn-change-theme"></div>
					</div>
				</li>
			</ul>
		</nav>
	</div>
	<i class="icon-toggle fas fa-bars"></i>
	<i class="icon-exit fas fa-times"></i>





<!-------------------------------------------------------------------------------------------
--------------------------------------- MENU PROFILE  ---------------------------------------
 -------------------------------------------------------------------------------------------->


	<div class="menu-profile">
		<nav>
			<ul>
				<li><a href="profile.php">Perfil</a></li>
				<li><a href="profile_edit.php">Editar</a></li>
				<li><a href="admin/cerrar.php">Cerrar sesión</a></li>
			</ul>
		</nav>
	</div>
	


<!-------------------------------------------------------------------------------------------
--------------------------------------- MENU TOGGLE  ----------------------------------------
 -------------------------------------------------------------------------------------------->	


	<div class="menu-toggle container-fluid row">
		<nav>
			<ul>
				<li><div class="container"><a href="timeline.php">TIMELINE</a></div></li>
				<li><div class="container"><a href="contacts.php">CONTACTOS</a></div></li>
				<li><div class="container"><a href="groups.php">GRUPOS</a></div></li>
				<li><div class="container"><a href="wiki.php">WIKI</a></div></li>
				<li><div class="container"><a href="chat.php">CHAT</a></div></li>
				<li><div class="container"><a href="profile.php">PERFIL</a></div></li>
				<li><div class="container"><a href="index.php">INSIDE</a></div></li>
			</ul>
		</nav>
	</div>
</header>
	




<!-------------------------------------------------------------------------------------------
------------------------------------------ MODALS  ------------------------------------------
 -------------------------------------------------------------------------------------------->	



<div class="body-modal">
	
</div>




<!-------------------------------------------------------------------------------------------
--------------------------------------- MODAL NEW GROUP -------------------------------------
 -------------------------------------------------------------------------------------------->	

<div class="modal-new-group">

	<i class="modal-exit fas fa-times"></i>

	<form action="#" class="col-md-11">
		<label for="">Nombre del grupo</label>
		<input class="col-md-11" type="text">
		<label for="">Descripción</label>
		<input class="col-md-11" type="text">
	</form>
	
	<div class="container filters col-md-11">
		<ul>
			<li><a href="#">Todos</a></li>
			<li><a href="#">Favoritos</a></li>
			<li><a href="#">Seguidos</a></li>
			<li><a href="#">Segidores</a></li>
		</ul>
	</div>


	<div class="contacts col-md-11">
	
		<div class="contact">
			<div class="wrapper-img col-lg-2 col-md-2 col-sm-2 col-2">
				<a href="contact.php"><img src="img/macri.png" alt=""></a>
			</div>
			
			<div class="wrapper-txt col-lg-10 col-md-10 col-sm-10 col-10">
				<p class="info">
					<a href="contact.php" class="user-name">Mauricio Macri</a>
					<a href=""><i class="fas fa-plus"></i></a>
				</p>
				<p class="job-title">Gerente<span class="separator">|</span><span class="area"><a href="group.php">Departamento de Finanzas</a></span></p>
				
				<div class="actions">
					<i class="fas fa-envelope"></i>
					<i class="fas fa-comment"></i>
					<i class="fab fa-skype"></i>
					<i class="fas fa-phone"></i>
				</div>
			</div>
			
		</div>

		<div class="contact">
			<div class="wrapper-img col-lg-2 col-md-2 col-sm-2 col-2">
				<a href="contact.php"><img src="img/cristina.png" alt=""></a>
			</div>
			
			<div class="wrapper-txt col-lg-10 col-md-10 col-sm-10 col-10">
				<p class="info">
					<a href="contact.php" class="user-name">Cristina Fernandez</a>
					<a href=""><i class="fas fa-plus"></i></a>
				</p>
				<p class="job-title">Gerente<span class="separator">|</span><span class="area"><a href="group.php">Departamento de Recursos Humano</a></span></p>
				
				<div class="actions">
					<i class="fas fa-envelope"></i>
					<i class="fas fa-comment"></i>
					<i class="fab fa-skype"></i>
					<i class="fas fa-phone"></i>
				</div>
			</div>
			
		</div>

		<div class="contact">
			<div class="wrapper-img col-lg-2 col-md-2 col-sm-2 col-2">
				<a href="contact.php"><img src="img/carrio.png" alt=""></a>
			</div>
			
			<div class="wrapper-txt col-lg-10 col-md-10 col-sm-10 col-10">
				<p class="info">
					<a href="contact.php" class="user-name">Elisa Carrio</a>
					<a href=""><i class="fas fa-plus"></i></a>
				</p>
				<p class="job-title">Coordinadora<span class="separator">|</span><span class="area"><a href="group.php">Departamento de Comunicaciones</a></span></p>
				
				<div class="actions">
					<i class="fas fa-envelope"></i>
					<i class="fas fa-comment"></i>
					<i class="fab fa-skype"></i>
					<i class="fas fa-phone"></i>
				</div>
			</div>
			
		</div>

		<div class="contact">
			<div class="wrapper-img col-lg-2 col-md-2 col-sm-2 col-2">
				<a href="contact.php"><img src="img/lionel.png" alt=""></a>
			</div>
			
			<div class="wrapper-txt col-lg-10 col-md-10 col-sm-10 col-10">
				<p class="info">
					<a href="contact.php" class="user-name">Lionel Richie</a>
					<a href=""><i class="fas fa-plus"></i></a>
				</p>
				<p class="job-title">Analista<span class="separator">|</span><span class="area"><a href="group.php">Departamento de Comunicaciones</a></span></p>
				
				<div class="actions">
					<i class="fas fa-envelope"></i>
					<i class="fas fa-comment"></i>
					<i class="fab fa-skype"></i>
					<i class="fas fa-phone"></i>
				</div>
			</div>
			
		</div>

		<div class="contact">
			<div class="wrapper-img col-lg-2 col-md-2 col-sm-2 col-2">
				<a href="contact.php"><img src="img/eze.png" alt=""></a>
			</div>
			
			<div class="wrapper-txt col-lg-10 col-md-10 col-sm-10 col-10">
				<p class="info">
					<a href="contact.php" class="user-name">Profe Eze</a>
					<a href=""><i class="fas fa-plus"></i></a>
				</p>
				<p class="job-title">Coordinador<span class="separator">|</span><span class="area"><a href="group.php">Departamento de Desarrollo</a></span></p>
				
				<div class="actions">
					<i class="fas fa-envelope"></i>
					<i class="fas fa-comment"></i>
					<i class="fab fa-skype"></i>
					<i class="fas fa-phone"></i>
				</div>
			</div>
			
		</div>

	
	</div>


	<a href="" class="btn-crear btn-azul-claro">Crear</a>

</div>



<!-------------------------------------------------------------------------------------------
---------------------------------------- LOADER ---------------------------------------------
 -------------------------------------------------------------------------------------------->	


<div class="wrapper-loader" id="wrapper-loader">
	<div class="loader" id="loader">
		
	</div>
</div>