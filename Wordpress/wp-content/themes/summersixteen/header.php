<html>

<head>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . './style.css'; ?>">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
	<img src="<?php echo get_template_directory_uri() . '/img/logo.png'; ?>" alt="logo" style="width: 300px; height: 200px;">
</head>

<body>


	<header class="site-header">
		<div class="logo-container"></div>

		<nav class="site-navigation">
			<?php wp_nav_menu( array('theme_location' => 'mon-menu', 'container_class' => 'menu-principal',
										'container_id' => 'menu-principal', 'menu-class' => 'navigation-content') );
			?>
		</nav>
		<div class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-pause-on-hover="true" data-cycle-speed="200">

		    <img src="http://malsup.github.io/images/p1.jpg">
		    <img src="http://malsup.github.io/images/p2.jpg">
		    <img src="http://malsup.github.io/images/p3.jpg">
		    <img src="http://malsup.github.io/images/p4.jpg">
		</div>
	<div id="page" class="site">
		<div id="content" class="site-content">