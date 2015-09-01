<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>

	<!-- Responsive design viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- favicon
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" >
	-->
	<link rel="stylesheet" media="all" href="<?php bloginfo('stylesheet_url'); ?>" >
	<link rel="stylesheet" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/font-awesome/css/font-awesome.min.css">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<!-- [if lt IE 9]>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>
<body>
	<header class="header-main">
		<div class="logo-main">
			<h1><a href="<?php echo get_option('home'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/css/images/header_blog.png" alt="<?php bloginfo('name'); ?>" ></a></h1>
		</div>

		<div class="nav-mobile" id="nav-mobile"></div>
		<?php wp_nav_menu( array(
			'theme_location' => 'main',
			'container' => 'nav',
			'container_class' => 'menu-main',
			'container_id' => 'menu-main'
		) ); ?>

	</header>
	<div class="wrapper" id="wrapper">
