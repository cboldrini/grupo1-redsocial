<?php 



//////////////////////////////////////////////////////////////////////////
/////////////////////// CONEXIÓN CON BASE DE DATOS ///////////////////////
//////////////////////////////////////////////////////////////////////////

function conexion($db_config){
	try {
	$conexion = new PDO('mysql:host=149.56.21.30;dbname='.$db_config['basedatos'], $db_config['usuario'], $db_config['pass']);
	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		return $conexion;

	} catch (PDOException $e) {
		return false;		
	}
}



// function conexion($db_config){
//   try {
//   $conexion = new PDO('mysql:host=localhost;dbname='.$db_config['basedatos'], $db_config['usuario'], $db_config['pass']);
//   $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     return $conexion;

//   } catch (PDOException $e) {
//     return false;   
//   }
// }





//////////////////////////////////////////////////////////////////////////
////////////////////////// SESIONES Y COOKIES ////////////////////////////
//////////////////////////////////////////////////////////////////////////

function comprobarSesion(){
	if (!isset($_SESSION['user'])) {
		header('Location: error.php');
	}
}





//////////////////////////////////////////////////////////////////////////
////////////////////////// FUNCIONES GENERALES ///////////////////////////
//////////////////////////////////////////////////////////////////////////

function limpiarDatos($datos){
	$datos = trim($datos);
	$datos = stripslashes($datos);
	$datos = htmlspecialchars($datos);
	return $datos;
};

function pagina_actual(){
	return isset($_GET['p']) ? (int)$_GET['p']: 1; 
}



///////////////////////// VALIDAR CONTRASEÑAS /////////////////////////////


function validar_password($password){
   if(strlen($password) < 6){
      $detalleErrorPassword = "La contraseña debe tener al menos 6 caracteres";
      return false;
   }
   if(strlen($password) > 16){
      $detalleErrorPassword = "La contraseña no puede tener más de 16 caracteres";
      return false;
   }
   if (!preg_match('`[a-z]`',$password)){
      $detalleErrorPassword = "La contraseña debe tener al menos una letra minúscula";
      return false;
   }
   if (!preg_match('`[A-Z]`',$password)){
      $detalleErrorPassword = "La contraseña debe tener al menos una letra mayúscula";
      return false;
   }
   if (!preg_match('`[0-9]`',$password)){
      $detalleErrorPassword = "La contraseña debe tener al menos un caracter numérico";
      return false;
   }
   $detalleErrorPassword = "";
   return true;
}



//////////////////////  Mejorar formato de fecha  ////////////////////////

function fecha($fecha){
  $timestamp = strtotime($fecha);
  $meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];

  $dia = date('d', $timestamp);
  $mes = date('m', $timestamp) - 1;
  $year = date('Y', $timestamp);

  $fecha = "$dia de " . $meses[$mes] . " del $year";
  return $fecha;
}








//////////////////////////////////////////////////////////////////////////
//////////////////// OBTENER DATOS DE BASE DE DATOS //////////////////////
//////////////////////////////////////////////////////////////////////////



///////////  VALIDAR SI EL EMAIL QUE SE INGRESA NO ESTÁ USADO ////////////

function emailUsado($conexion, $email){
    $sentencia = $conexion->prepare("SELECT COUNT(email) FROM users WHERE email=:email;");
    $sentencia->execute(array(':email' => $email));
    return !!$sentencia->fetchColumn(0);
}




/////////////  VALIDAR SI EL PASSWORD COINCIDE CON EL USUARIO ////////////

function obtenerPassword($conexion, $email){
    $sentencia = $conexion->prepare("SELECT password FROM users WHERE email= '$email' LIMIT 1;");
    $sentencia->execute();
	return $sentencia->fetchAll();
}



///////////////////  OBTENER LOS DATOS DEL USUARIO //////////////////////

function obtenerDatosDeUsuario($conexion, $email){
    $sentencia = $conexion->prepare("SELECT * FROM users WHERE email= '$email' ;");
    $sentencia->execute();
	return $sentencia->fetchAll();
}


function obtenerDatosDeUsuarioPorId($conexion, $id){
    $sentencia = $conexion->prepare("SELECT * FROM users WHERE id= '$id' ;");
    $sentencia->execute();
  return $sentencia->fetch();
}

function obtenerAreaPorIdUsuario($conexion, $id){
    $sentencia = $conexion->prepare("
      SELECT areas.name as area, areas.id as id 
      FROM users 
      INNER JOIN areas 
      ON area_id = areas.id 
      WHERE users.id= '$id' 
      ;");
    $sentencia->execute();
  return $sentencia->fetch();
}

function obtenerAreaPorId($conexion, $id){
    $sentencia = $conexion->prepare("
      SELECT *
      FROM areas 
      WHERE id= '$id' 
      ;");
    $sentencia->execute();
  return $sentencia->fetch();
}

function obtenerPostsPorIdUsuario($conexion, $id){
    $sentencia = $conexion->prepare("
      SELECT * FROM posts as p
      INNER JOIN users as u
      ON user_id = u.id 
      WHERE user_id = '$id' 
      ORDER BY p.created_date DESC
      ;");
    $sentencia->execute();
  return $sentencia->fetchAll();
}

///////////////////  OBTENER ID NUEVO USUARIO ////////////////////////////

function obtenerIdNuevoUsuario($conexion){
    $sentencia = $conexion->prepare("SELECT MAX(id) as id FROM users  ;");
    $sentencia->execute();
  return $sentencia->fetch();
}



///////////////////////////  OBTENER POSTS ////////////////////////////////

function obtenerPosts($conexion){
    $sentencia = $conexion->prepare("
      SELECT * 
      FROM posts as p
      INNER JOIN users as u
      ON user_id = u.id 
      ORDER BY p.created_date DESC
      ;");
    $sentencia->execute();
  return $sentencia->fetchAll();
}




//////////////////////////////////////////////////////////////////////////
//////////////////// INSERTAR DATOS EN BASE DE DATOS /////////////////////
//////////////////////////////////////////////////////////////////////////


///////////////////////////// NUEVO USUARIO //////////////////////////////

function nuevoUsuario($conexion, $email, $nombre, $apellido, $password){
  $sentencia = $conexion->prepare(
    "INSERT INTO users(id, email, first_name, last_name, password) 
    VALUES (null,:email,:nombre,:apellido,:password)"
  );

   $sentencia->execute(array(
    ':email' => $email,
    ':nombre' => $nombre,
    ':apellido' => $apellido,
    ':password' => $password
  ));
}


///////////////////////////// NUEVO POST ////////////////////////////////

function nuevoPost($conexion, $message, $user_id, $created_date){
  $sentencia = $conexion->prepare(
    "INSERT INTO posts(id, message, user_id, created_date) 
    VALUES (null,:message,:user_id,:created_date)"
  );

   $sentencia->execute(array(
    ':message' => $message,
    ':user_id' => $user_id,
    ':created_date' => $created_date
  ));
}


///////////////////////// GUARDAR FOTO TEMPORAL /////////////////////////////












?>