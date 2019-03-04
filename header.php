<?php 
	/* 
	* Template for the header
	* @package Dynamo
	*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); wp_title(); ?></title>
	<link rel="prifile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/public/css/styles.css" type="text/css" media="all">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
	<div class="container-fluid">
		<div class="col-12">
			<nav class="navbar navbar-expand-md">
				<div class="row align-items-center">
					<div class="col-4 d-md-none toggler">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span><i class="fas fa-bars"></i></span>
							<span><i class="fas fa-times"></i></span>
						</button>
					</div>
					<div class="col-7 offset-1 col-md-5 offset-md-0 col-lg-3 offset-lg-0">
						<a class="navbar-brand image-bg-behavior" href="index.php" style="background-image:url('<?= get_template_directory_uri() ?>/public/img/dynamo_logo.png')" class="image-bg-behavior"></a>
					</div>
					<div class="col-md-7 col-lg-9">
						<div class="collapse navbar-collapse navbar-light justify-content-end" id="navbarNav">
							<?php
								wp_nav_menu(array(
									'Theme Location' => 'primary',
									'container' => false,
									'menu_class' => 'navbar navbar-expand-lg',
									'menu' => 'Header_menu'
								));
							?>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</div>
	<hr>
	<div class="head-background" style="background-image:url('<?= get_post_meta(get_the_ID(), 'wpcf-background-img-header', true) ?>')"></div>
</header>
    
</body>
</html>