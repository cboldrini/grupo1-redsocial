<?php session_start();


/////////////// LLAMANDO A LAS CONFIGIGURACIONES GENERALES ////////////////

require_once 'admin/config.php';
require_once 'admin/functions.php';


$conexion = conexion($db_config);

$email = $_GET['email'];

$emailExistente = emailUsado($conexion, $email);

echo $emailExistente;
// echo "Hola";

// var_dump($emailExistente);




 ?>