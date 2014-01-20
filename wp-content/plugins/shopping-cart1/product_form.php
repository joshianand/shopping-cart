<div class="wrap">  
    <?php    echo "<h2>" . __( 'Product Display Options', 'gmp-plugin' ) . "</h2>"; ?>  
      
    <form name="product_form" method="post" action="product-post.php">  
	<?php settings_fields('setting-group'); ?>
       <table class="form-table">
			<tr valign="top">
				<th scope="row"><?php _e('Product Name','gmp-plugin') ?></th>
				<td>
					<input type="text" name="option_name" value="<?php echo get_option('option_name'); ?>">
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><?php _e('Product Description','gmp-plugin') ?></th>
				<td>
					<textarea cols="40" name="option_description"><?php echo get_option('option_description'); ?></textarea>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><?php _e('Product Price','gmp-plugin') ?></th>
				<td>
					<input type="text" name="option_price" value="<?php echo get_option('option_price'); ?>">
				</td>
			</tr>		
	   </table>

        <p class="submit">  
        <input type="submit" class="button-primary" name="Submit" value="<?php _e('Publish', 'gmp-plugin' ) ?>" />  
        </p>  
    </form>  
</div>  

