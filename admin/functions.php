<?php 



//////////////////////////////////////////////////////////////////////////
/////////////////////// CONEXIÓN CON BASE DE DATOS ///////////////////////
//////////////////////////////////////////////////////////////////////////

function conexion($db_config){
	try {
	$conexion = new PDO($db_config['dsn'].$db_config['basedatos'], $db_config['usuario'], $db_config['pass']);
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



//////////////////  OBTENER CONVERSACIONES POR USUARIO ////////////////////

function obtConvPorUsr($conexion, $id){
  $sentencia = $conexion->prepare("
  SELECT c.conversation_id, u.first_name, u.last_name, u.photo, m.message 
  FROM conversation_user as c 
  INNER JOIN users as u 
  ON c.user_id = u.id 
  INNER JOIN messages as m 
  ON m.conversation_id = c.conversation_id 
  WHERE c.conversation_id IN (
                      SELECT c.conversation_id 
                      FROM conversation_user as c
                      WHERE c.user_id = '$id'
                      )
  AND c.user_id != '$id'
  GROUP BY u.id
  ;");
  $sentencia->execute();
  return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}



//////////////////  OBTENER MENSAJES POR CONVERSACION ////////////////////

// function obtMsjPorConv($conexion, $id){
//   $sentencia->prepare("
//     SELECT u.first_name, u.last_name, u.photo, m.message, m.created_date, m.user_s_id 
//     FROM users as user_id 
//     INNER JOIN messages as m 
//     ON m.conversation_id = c.conversation_id 
//     INNER JOIN conversation_user as c 
//     ON c.conversation_id = 
//   ")
// }


function obtMsjPorConv($conexion, $conv_id, $usr_id){
  $sentencia = $conexion->prepare("
    SELECT u.first_name, u.last_name, u.photo, u.id, m.message, m.created_date, m.user_s_id 
    FROM conversation_user as c 
    INNER JOIN users as u 
    ON c.user_id = u.id 
    INNER JOIN messages as m 
    ON m.conversation_id = c.conversation_id 
    WHERE c.conversation_id = $conv_id 
    AND c.user_id != '$usr_id'
    ;");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}




// Array ( 
//   [0] => Array ( 
//     [first_name] => Cristian 
//     [last_name] => Boldrini 
//     [photo] => img/users/2.png 
//     [message] => Hola 
//     [created_date] => 2019-08-02 19:13:57 
//     [user_s_id] => 1 
//   ) 

//   [1] => Array ( 
//     [first_name] => Cristian 
//     [last_name] => Boldrini 
//     [photo] => img/users/2.png 
//     [message] => Fran 
//     [created_date] => 2019-08-02 20:12:57 
//     [user_s_id] => 2 
//   ) 

//   [2] => Array ( [first_name] => Cristian [last_name] => Boldrini [photo] => img/users/2.png [message] => Qu� onda? [created_date] => 2019-08-02 21:12:57 [user_s_id] => 2 ) 
//   [3] => Array ( [first_name] => Cristian [last_name] => Boldrini [photo] => img/users/2.png [message] => Todo bien, vos? [created_date] => 2019-08-02 21:14:57 [user_s_id] => 1 ) )



//////////////////////////////////////////////////////////////////////////
//////////////////// INSERTAR DATOS EN BASE DE DATOS /////////////////////
//////////////////////////////////////////////////////////////////////////


///////////////////////////// NUEVO USUARIO //////////////////////////////

function nuevoUsuario($conexion, $email, $nombre, $apellido, $password, $photo){
  $sentencia = $conexion->prepare(
    "INSERT INTO users(id, email, first_name, last_name, password, photo) 
    VALUES (null,:email,:nombre,:apellido,:password,:photo)"
  );

   $sentencia->execute(array(
    ':email' => $email,
    ':nombre' => $nombre,
    ':apellido' => $apellido,
    ':password' => $password,
    ':photo' => $photo
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