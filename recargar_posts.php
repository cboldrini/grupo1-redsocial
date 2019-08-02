<?php session_start();


/////////////// LLAMANDO A LAS CONFIGIGURACIONES GENERALES ////////////////

require_once 'admin/config.php';
require_once 'admin/functions.php';
require_once 'admin/variables.php';

$usuario = $_SESSION['user'];

$conexion = conexion($db_config);

comprobarSesion();

if (!$conexion) {
	header('Location: error.php');
}


$posts = obtenerPosts($conexion);


///////////////////////////// NUEVO POST //////////////////////////////////

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$message = $_POST['message'];
	$created_date = date("Y-m-d H:i:s");
	$id_usr = $datos_usr["id"];


	nuevoPost($conexion, $message, $id_usr, $created_date);

}



?>



<?php foreach ($posts as $post): ?>

	<div class="post">
		<div class="wrapper-img col-md-1 col-2 col-sm-2">
			<a href="contact.php?user=<?php echo $post['id'];?>"><img src="<?php echo $post['photo'];?>" alt=""></a>
		</div>
		
		<div class="wrapper-txt col-md-11 col-10 col-sm-10">
			<p class="post-info">
				<a href="contact.php?user=<?php echo $post['id'];?>" class="post-user">
					<?php echo $post['first_name'] . " " . $post['last_name'];?>		
				</a>

				<span class="post-date">
					<?php echo $post[3];?>
				</span>
			</p>
			<p class="post-message">
				<?php echo $post['message'];?>
			</p>
			
			<div class="post-actions">
				<i class="fas fa-thumbs-up"></i>
				<i class="fas fa-reply"></i>
				<i class="fas fa-share-alt"></i>
			</div>
		</div>
		
	</div>
<?php endforeach; ?>