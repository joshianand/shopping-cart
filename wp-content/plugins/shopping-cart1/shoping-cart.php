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
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'Products' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null
        )  
    );  
}  

add_action( 'add_meta_boxes', 'gmp_meta_box_init' );

function gmp_meta_box_init() {
	
	add_meta_box('gmp_meta',__('Product Information','gmp-plugin'),'gmp_meta_box','product','normal','default');
	
	add_action('save_post','gmp_save_meta_box');
}
	
function gmp_meta_box($post,$box){
	echo $post->ID;
	$gmp_price = get_post_meta($post->ID,'_gmp_price',true);

	
	echo '<p>' .__('Price','gmp-plugin'). ':<input type="text" name ="gmp_price" value="'.esc_html($gmp_price).'" size="5"></p>';	
}
function gmp_save_meta_box($post_id,$post){
	if(isset($_POST['gmp_price']))
	{
		update_post_meta($post_id,'_gmp_price', esc($_POST['gmp_price']));
	}
}


?>

