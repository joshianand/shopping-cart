<html>
	<head>
		<title>Tutorial theam</title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	</head>
	
	<body <?php body_class(); ?>>
		<div id="wrapper">
			<div id="header">
				<h2>HEADER</h2>
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>				
			</div>
	