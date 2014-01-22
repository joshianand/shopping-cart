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

session_start();

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header(''); ?>
<?php global $post; $post->post_name; 
	  $html = get_template_directory_uri('');
	  $site_url = get_site_url();	  
	  $price = get_post_meta(get_the_ID(), '_product_price', true );
?>

<div class="product">
<?php 
	if(isset($_POST['SUBMIT']))
	{
	
		
		$name = $post->post_name;
		$quan = $_POST['quantity'];
		
		$cart = array('name'=>$name,'price'=>$price,'quantity'=>$quan);
		
		my_plugin_override($cart);		
		 
		?>
		<div class="success-cart">
			<a href="<?php echo $site_url;?>/?page_id=147">View Cart</a>
			"<?php echo $post->post_name; ?>" was successfully added to your cart.
		</div>
		<?php
	}

	$args = array(
		'post_type' => 'product',
		'name'		=> $post->post_name		
		
	);
	$products = new WP_Query( $args );
	if( $products->have_posts() ) {
		while( $products->have_posts() ) {
			$products->the_post();
			?>
				<h3><?php the_title() ?></h3>
				<div class='content'>
					<?php the_content() ?>
				</div>
			<?php
		}
	}
	else {
		echo 'Oh ohm no products!';
	}
	
	?>
	
	<div>Price: <?php echo $price;?></div>
	<form method="post" action="">
		<div class="quantity">
			<input type="number" step="1" name="quantity" value="1" title="Qty" class="input-text qty text">
		</div>
		<input type="hidden" name="add-to-cart" value="<?php echo get_the_ID(); ?>" />
		<input type="hidden" name="price" value="<?php echo $price; ?>" />
		<input id="single_add_to_cart" type="SUBMIT" value="Add to cart" name="SUBMIT">		
	</form>
</div>

<?php get_footer(''); ?>