<?php 
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 * Template Name: My Cart Page
*/
session_start();

get_header(''); 
		 ?>
		 
<div class="product">
<?php 
foreach($_SESSION['cart'] as $key => $value){
$price = $value['price'];
$quantity = $value['quantity'];
$total = $price * $quantity;
?>
<table>
<tr>
<td>Product Name</td>
<td><?php echo $value['name']; ?></td>
</tr>

<tr>
<td>Product Price</td>
<td><?php echo $value['price']; ?></td>
</tr>

<tr>
<td>Product Quntity</td>
<td><?php echo $value['quantity']; ?></td>
</tr>

<tr>
<td>Total Price</td>
<td><?php echo $total; ?></td>
</tr>
</table>
<hr>
<?php 
}
?>
<input type="submit" class="btn" name="proceed" value="Proceed to Checkout">
</div>