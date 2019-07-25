<?php 
	require_once 'partials/header_in.php';
 ?>

<section id="article" class="container-fluid row">

<?php 
	require_once 'partials/menu_left.php';
 ?>


<div class="main col-lg-10 col-md-9 col-sm-9 col-12">	


	<div class="container articles col-md-10">
		
		<div class="article">
			
			<div class="info">
				
				<div class="author">
					<a href="profe_eze.php"><img src="img/eze.png" alt=""></a>
					<a href="profe_eze.php">Profe Eze</a>
				</div>
				<span class="date">21 de Julio de 2019</span>
				<span class="actions">
					<i class="fas fa-thumbs-up"></i>
					<i class="fas fa-reply"></i>
					<i class="fas fa-share-alt"></i>
					<i class="fas fa-star"></i>
				</span>
				<h4 class="title">¿Cómo generar un reporte automaticamente en Excel?</h4>

			</div>
			
			<div class="content">
				<p><span class="bold">Este artículo te enseñará a automatizar los informes de datos en Microsoft Excel</span>. Si los datos son externos, este artículo te mostrará cómo ejecutar consultas y crear informes a partir de una fuente de datos externa (MySQL, Postgres, Oracle, etc) desde adentro de la hoja de cálculo. Para hacerlo, se utilizarán complementos de Excel que se encargarán de vincular la hoja de cálculo con las fuentes de datos externas.</p>
				<p>Si los datos están almacenados en una hoja de cálculo de Excel, <span class="bold">se utilizarán macros para construir informes y exportarlos con distintos formatos</span> con solo presionar una tecla. Afortunadamente, Excel viene con un grabador de pasos, lo cual significa que no tendrás que programar las macros tú mismo.</p>
				<p>Descarga el complemento de <span class="bold">Kloudio</span> para Excel desde la AppSource de Microsoft. Esto te permitirá crear una conexión persistente entre una base de datos o fuente de datos externa y tu hoja de cálculo. Este complemento también funciona en Hojas de cálculo de Google.</p>
				<p>Una vez que hayas creado una conexión entre la hoja de cálculo y la base de datos, podrás <span class="bold">ejecutar consultas y construir informes</span> a partir de los datos externos sin salir de Excel. Crea tus informes personalizados en el portal de Kloudio y luego selecciónalos desde el menú desplegable en Excel. Luego podrás aplicar filtros adicionales y elegir la frecuencia con la que debe actualizarse el informe (por ejemplo, para que la hoja de ventas se actualice en forma semanal, diaria o incluso cada una hora).</p>
				<p>Además, puedes ingresar datos en la hoja de cálculo conectada y hacer que esos datos actualicen la fuente externa. Crea una plantilla para subir en el portal de Kloudio y podrás subir cambios manual o automáticamente desde tu hoja de cálculos hacia la fuente de datos externa.</p>
			</div>
		

		

	</div>

</div>

</section>


<?php 
	require_once 'partials/footer_scripts.php';
 ?>