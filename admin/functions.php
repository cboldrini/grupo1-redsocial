<?php 

// CONEXIÓN CON LA BASE DE DATOS //

function conexion($bd_config){
	try {
		$conexion = new PDO('mysql:host=181.119.169.68;dbname='.$bd_config['basedatos'],$bd_config['usuario'],$bd_config['pass']);
		return $conexion;
	} catch (PDOException $e) {
		return false;
	}
}





// SESIONES Y COOKIES //

function comprobarSesion(){
	if (!isset($_SESSION['admin'])) {
		header('login.php');
	}
}





// FUNCIONES GENERALES //

function limpiarDatos($datos){
	$datos = trim($datos);
	$datos = stripslashes($datos);
	$datos = htmlspecialchars($datos);
	return $datos;
};

function pagina_actual(){
	return isset($_GET['p']) ? (int)$_GET['p']: 1; 
}




// OBTENER DATOS DE DB //

function obtener_post($post_por_pagina, $conexion){
	$inicio = (pagina_actual() > 1) ? (pagina_actual() * $post_por_pagina - $post_por_pagina) : 0;
	$sentencia = $conexion->prepare("SELECT  SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $post_por_pagina");
	$sentencia->execute();
	return $sentencia->fetchAll();
};

function obtener_anydesks($conexion){
	$sentencia = $conexion->prepare("SELECT * FROM anydesk");
	$sentencia->execute();
	return $sentencia->fetchAll();
};

function obtener_internos($conexion){
	$sentencia = $conexion->prepare("SELECT * FROM internos");
	$sentencia->execute();
	return $sentencia->fetchAll();
};

function obtener_sedes($conexion){
	$sentencia = $conexion->prepare("SELECT * FROM sedes");
	$sentencia->execute();
	return $sentencia->fetchAll();
};

// $sedes = obtener_sedes($conexion);

function obtener_colaboradores($conexion,$where){
	$sentencia = $conexion->prepare("SELECT * FROM colaboradores $where");
	$sentencia->execute();
	return $sentencia->fetchAll();
};


function obtener_faqs($conexion){
	$sentencia = $conexion->prepare("SELECT * FROM faqs");
	$sentencia->execute();
	return $sentencia->fetchAll();
};

function obtener_categorias_faqs($conexion){
	$sentencia = $conexion->prepare("SELECT * FROM faqs_categorias");
	$sentencia->execute();
	return $sentencia->fetchAll();
};

function numero_paginas($post_por_pagina, $conexion){
	$total_post = $conexion->prepare('SELECT FOUND_ROWS() as total');
	$total_post->execute();
	$total_post = $total_post->fetch()['total'];

	$numero_paginas = ceil($total_post / $post_por_pagina);
	return $numero_paginas;
}

function id_articulo($id){
	return (int)limpiarDatos($id);
};


function obtener_post_por_id($conexion, $id){
	$resultado = $conexion->query("SELECT * FROM articulos WHERE id = $id LIMIT 1");
	$resultado = $resultado->fetchAll();
	return ($resultado) ? $resultado : false;
}

function fecha($fecha){
	$timestamp = strtotime($fecha);
	$meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];

	$dia = date('d', $timestamp);
	$mes = date('m', $timestamp) - 1;
	$year = date('Y', $timestamp);

	$fecha = "$dia de " . $meses[$mes] . " del $year";
	return $fecha;
}






?>