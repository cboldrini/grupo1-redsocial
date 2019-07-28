<section class="paginacion">
	<ul>
		<?php 
			# Establecemos el numero de paginas
			$numero_paginas = numero_paginas($wiki_config['articulos_por_pagina'], $conexion);
		?>
		<!-- Mostramos el boton para retroceder una pagina -->
		<?php if (pagina_actual() === 1): ?>
			<li class="pag-disabled">&laquo;</li>
		<?php else: ?>
			<li><a href="?p=<?php echo pagina_actual() - 1?>">&laquo;</a></li>
		<?php endif; ?>

		<!-- Creamos un elemento li por cada pagina que tengamos -->
		<?php for ($i = 1; $i <= $numero_paginas; $i++): ?>
			<!-- Agregamos la clase active en la pagina actual -->
			<?php if (pagina_actual() === $i): ?>
				<li class="pag-active">
					<?php echo $i; ?>
				</li>
			<?php else: ?>
				<li>
					<a href="?p=<?php echo $i?>"><?php echo $i; ?></a>
				</li>
			<?php endif; ?>
		<?php endfor; ?>

		<!-- Mostramos el boton para avanzar una pagina -->
		<?php if (pagina_actual() == $numero_paginas): ?>
			<li class="pag-disabled">&raquo;</li>
		<?php else: ?>
			<li><a href="php?p=<?php echo pagina_actual() + 1; ?>">&raquo;</a></li>
		<?php endif; ?>
	</ul>
</section>