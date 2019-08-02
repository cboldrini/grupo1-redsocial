<?php 
	require_once 'partials/header_in.php';
 ?>



<section id="timeline" class="container-fluid row">


<?php 
	require_once 'partials/menu_left.php';
 ?>



<div class="main col-lg-10 col-md-9 col-sm-9 col-12">
	
	<div class="post-new col-md-11 col-12">

		<div class="wrapper-img col-md-1 col-2">
				<img src="<?php echo $foto_usr; ?>" alt="">
			</div>

		<form id="nuevo_post" method="post" class="col-md-11 col-10">
			<input type="text" class="col-md-10 col-8" name="message" id="message" placeholder="Escribe un nuevo post...">
			<button><i class="fas fa-plus"></i></button>
		</form>

		
	</div>

	

	<?php 
	require_once 'partials/posts_filters.php';
 	?>

	<div class="posts col-md-11" id="recarga_posts">

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



		

	</div>

</div>
</section>


<?php 
	require_once 'partials/footer_scripts.php';
 ?>