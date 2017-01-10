<!DOCTYPE HTML>
<html>
<head>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"> 
	<link rel="stylesheet" type="text/css" href="style.css">
	<title><?php wp_title(''); ?></title>
	
	
</head>
<body>
	<header>
		<h1><a href="<?php echo get_site_url();?>"><?php bloginfo( 'name' ); ?></a></h1>
		<p><?php bloginfo( 'description' ); ?></p>
	</header>
	<nav class="nav">
		<!-- <h2>CONTENTS</h2> -->
		<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
	</nav>