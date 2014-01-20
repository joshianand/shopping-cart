<?php

?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>	
	<title>Way2Web</title>	
<?php
$html = get_template_directory_uri('');
$page = get_page_by_path($slug);


 global $post; 
 //echo $post->post_name; 

?>
	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.slides.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/global.js"></script>
	
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<div class="wrapper">
		<?php if($post->post_name == "home") 
		{
		?>
			<div class="home_container">
				<div class="home_inner_container">
		<?php 
		}
		elseif ($post->post_name == "marketing") 
		{
		?>			
			<div class="marketing_container">
				<div class="marketing_inner_container">
		<?php 
		}
		elseif ($post->post_name == "ontwerp") 
		{
		?>		
			<div class="ontwerp_container">
				<div class="ontwerp_inner_container">
		<?php
		}		
		elseif ($post->post_name == "ontwikkeling") 
		{
		?>		
			<div class="ontwikkeling_container">
				<div class="ontwikkeling_inner_container">
		<?php
		}
		?>
				
					<header>					
						<div class="header_container">
							<div class="left_header">
								<div class="logo">	
									<?php $html = get_template_directory_uri(''); ?>
									<img src="<?php echo $html; ?>/img/logo1.png" alt="">
								</div>								
							</div>
							<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>						
							<div class="right_header">
								<a href="#"> <img src="<?php echo $html; ?>/img/facebook.png" alt=""></a>
							</div>
							<br class="clear">
						</div>
					</header><!-- header ends here -->
