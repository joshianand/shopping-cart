<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header('shop'); ?>

<?php 

	global $post;
						
	$terms = get_the_terms( $post->ID, 'product_cat' );
	foreach ($terms as $term) {
			$catname = $term->name;	
			break;
	}	
?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/learn.css">	
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/kids.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/mens_responsive.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/product.css">

<?php $html = get_template_directory_uri(''); ?>
<div class="main_image" style="height:154px;">
<?php 
if ($catname == "accessory" || $catname == "accessories")
{
?>
<img src="<?php echo $html; ?>/img/Interior_header.jpg" width="1000" height="154" border="0"> 
<?php
}
if ($catname == "mens")
{
?>
<img src="<?php echo $html; ?>/img/header_mens_interior.jpg" width="1000" height="154" border="0"> 
<?php
}
elseif($catname == "womens")
{
?>
<img src="<?php echo $html; ?>/img/header_womens_interior.jpg" width="1000" height="154" border="0"> 
<?php
}
elseif($catname == "running")
{
?>
<img src="<?php echo $html; ?>/img/header_running_interior.jpg" width="1000" height="154" border="0"> 
<?php
}
elseif($catname == "kids")
{
?>
<img src="<?php echo $html; ?>/img/header_kids_interior.jpg" width="1000" height="154" border="0"> 
<?php
}
?>		
</div>  
<div class="top_img" style="height:14px;">
	<img src="<?php echo $html; ?>/img/Interior_lines.gif" width="1000" height="14" border="0"/>
</div>
<div>
	<div id="narrowColumn">
        <div id="accordion">
	
		<?php 
			if ($catname == "mens")
			{
			?>			
			<div id="leftNavBar">MEN'S GOLD SERIES</div>
			<div id="narrowColumnContent">
				<?php $args = array( 'post_type' => 'product', 'posts_per_page' => 3, 'product_cat' => 'mens-gold', 'orderby' => 'date' , 'order' => 'asc');
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>				
					<a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
						<div class="homeTitleText"><?php the_title(); ?></div>                    
					</a>
					<p><?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?></p>
						<br class="clear">			
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</div> 
			<div id="leftNavBar">MEN'S SILVER SERIES</div>
			<div id="narrowColumnContent">
				<?php $args = array( 'post_type' => 'product', 'posts_per_page' => 3, 'product_cat' => 'mens-silver', 'orderby' => 'date' , 'order' => 'asc' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>				
					<a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
						<div class="homeTitleText"><?php the_title(); ?></div>                       
					</a>
					<p><?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?></p>
						<br class="clear">			
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</div> 
			<div id="leftNavBar">ACCESSORIES</div>
            <div id="narrowColumnContent">
                <?php wp_list_pages('include=58&link_before=See all of Our Snowshoe &title_li='); ?>
                <br>
            </div>

			<?php
			}
			elseif($catname == "womens")
			{
			?>
			<div id="leftNavBar">WOMEN'S GOLD SERIES</div>
			<div id="narrowColumnContent">
				<?php $args = array( 'post_type' => 'product', 'posts_per_page' => 3, 'product_cat' => 'womens-gold', 'orderby' => 'date' , 'order' => 'asc' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>				
					<a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
						<div class="homeTitleText"><?php the_title(); ?></div>                       
					</a>	
					<p><?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?></p>
						<br class="clear">			
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</div> 
			<div id="leftNavBar">WOMEN'S SILVER SERIES</div>
			<div id="narrowColumnContent">
				<?php $args = array( 'post_type' => 'product', 'posts_per_page' => 3, 'product_cat' => 'womens-silver', 'orderby' => 'date' , 'order' => 'asc' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>				
					<a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
						<div class="homeTitleText"><?php the_title(); ?></div>                       
					</a>	
					<p><?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?></p>
						<br class="clear">			
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>				
			</div> 
			<div id="leftNavBar">ACCESSORIES</div>
            <div id="narrowColumnContent">
                <?php wp_list_pages('include=58&link_before=See all of Our Snowshoe &title_li='); ?>
                <br>
            </div>
			<?php
			}
			elseif($catname == "running")
			{
			?>
			<div id="leftNavBar">RUNNING SERIES</div>
			<div id="narrowColumnContent">
				<?php $args = array( 'post_type' => 'product', 'posts_per_page' => 3, 'product_cat' => 'running', 'orderby' => 'date' , 'order' => 'asc' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
				
					<a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
						<div class="homeTitleText"><?php the_title(); ?></div>                       
					</a>
					<p><?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?></p>					
						<br class="clear">			
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</div> 
			<div id="leftNavBar">ACCESSORIES</div>
            <div id="narrowColumnContent">
                <?php wp_list_pages('include=58&link_before=See all of Our Snowshoe &title_li='); ?>
                <br>
            </div>
			<?php
			}
			elseif($catname == "kids")
			{
			?>
			<div id="leftNavBar">KIDS</div>
			<div id="narrowColumnContent">
				<?php $args = array( 'post_type' => 'product', 'posts_per_page' => 2, 'product_cat' => 'kids', 'orderby' => 'date' , 'order' => 'asc' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
				
					<a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
						<div class="homeTitleText"><?php the_title(); ?></div>                       
					</a>	
					<p><?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?></p>
						<br class="clear">			
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</div> 
			<div id="leftNavBar">ACCESSORIES</div>
            <div id="narrowColumnContent">
                <?php wp_list_pages('include=58&link_before=See all of Our Snowshoe &title_li='); ?>
                <br>
            </div>
			<?php
			}
			?>			
	</div>
	</div>
		
	<div id="wideColumn">
		<div id="wideColumnContent">
            	<?php
                    /**
                    * woocommerce_before_main_content hook
                    *
                    * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
                    * @hooked woocommerce_breadcrumb - 20
                    */
                    do_action('woocommerce_before_main_content');
                ?>

                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php woocommerce_get_template_part( 'content', 'single-product' ); ?>

                    <?php endwhile; // end of the loop. ?>

                <?php
                    /**
                    * woocommerce_after_main_content hook
                    *
                    * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                    */
                    do_action('woocommerce_after_main_content');
                ?>				
		</div>
	</div>  
	<br class="clear">
</div>
<div class="bottom_img" style="height:12px;">
	<img src="<?php echo $html; ?>/img/Interior_bottom_lines.gif" width="1000" height="12">
</div>



	<?php
		/**
		 * woocommerce_sidebar hook
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		//do_action('woocommerce_sidebar');
	?>

<?php get_footer('shop'); ?>