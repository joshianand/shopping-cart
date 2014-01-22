<?php   
    /* 
    Plugin Name: Shopping Cart
    
    */  
	
register_activation_hook(__FILE__,'pp_install');

function pp_install(){
	global $wp_versions;
	if(version_compare($wp_version, "2.9", "<")){
		deactivate_plugin(basename(__FILE__));
		wp_die("This plugin requires Wordprss version 2.9 or higher.");
	}
}	
/* add_action('admin_menu', 'add_product');

function add_product() {  
    add_menu_page("Product", "Product",1,__FILE__, "product_admin"); 

	add_submenu_page(__FILE__,"Add Product","Add Product", 1,__FILE__.'_add_product',"submenu_admin" );
	
	add_action('admin_init','register_settings');
	
} 

function register_settings(){
	register_setting('setting-group','option_name');
	register_setting('setting-group','option_description');
	register_setting('setting-group','option_price');	
} 
	
function product_admin() {  
    include('product_form.php');  
}    
	
function submenu_admin() {  
    include('product_form.php');  
}  */

  
add_action( 'init', 'create_post_type' );  
  
function create_post_type() { 
 $labels = array(
    'name'               => 'Products',
    'singular_name'      => 'Product',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Product',
    'edit_item'          => 'Edit Product',
    'new_item'           => 'New Product',
    'all_items'          => 'All Product',
    'view_item'          => 'View Product',
    'search_items'       => 'Search Product',
    'not_found'          => 'No Products found',
    'not_found_in_trash' => 'No Products found in Trash',
    'parent_item_colon'  => '',
    'menu_name'          => 'Products'
  ); 
    register_post_type( 'product',  
        array(	  
     		
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'show_in_nav_menus'  => TRUE,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'Products' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array ( 'editor', 'title' )
        )  
    );  
}  

add_action( 'init', 'add_taxonomies', 0 );

function add_taxonomies() {

	register_taxonomy('product_cat', 'product', array(
		
		'hierarchical' => true,
		'labels' => array(
			'name' => _x( 'Categories', 'taxonomy general name' ),
			'singular_name' => _x( 'Category', 'taxonomy singular name' ),
			'search_items' =>  __( 'Search Product Categories' ),
			'all_items' => __( 'All Product Categories' ),
			'parent_item' => __( 'Parent Product Category' ),
			'parent_item_colon' => __( 'Parent Product Category:' ),
			'edit_item' => __( 'Edit Product Category' ),
			'update_item' => __( 'Update Product Category' ),
			'add_new_item' => __( 'Add New Product Category' ),
			'new_item_name' => __( 'New Product Category Name' ),
			'menu_name' => __( 'Categories' ),
		),		
		'rewrite' => array(
			'slug' => 'product_cat', 
			'with_front' => false, 
			'hierarchical' => true 
		),
	));
}

add_action( 'add_meta_boxes', 'meta_box' );

function meta_box() {
	
	add_meta_box('gmp_meta',__('Product Information','gmp-plugin'),'product_meta_box','product','normal','default');

}
	
function product_meta_box($post,$box){
	
	$product_price = get_post_meta($post->ID,'_product_price',true);
	
	echo '<p>' .__('Price','gmp-plugin'). ':<input type="text" name ="product_price" value="'.esc_attr($product_price).'" size="5"></p>';	
}

	
	add_action('save_post','product_save_meta_box');

function product_save_meta_box($post_id){
	
	if(isset($_POST['product_price']))
	{
		update_post_meta($post_id,'_product_price', esc_attr($_POST['product_price']));
	}
}

add_action( 'muplugins_loaded', 'my_plugin_override' );

		function my_plugin_override($details='') {
		
			$car_arr = array(
			'name'	=> $details['name'],
			'price'	=>	$details['price'],
			'quantity'	=>$details['quantity']
		  );
		  
		  
		  if(isset($_SESSION['cart']))
		  {
			$_SESSION['cart'][] = $car_arr;
		  }
		  else
		  {
			$_SESSION['cart'] = array();
			$_SESSION['cart'][] = $car_arr ;
		  }
		  
		  
		
		}


?>

