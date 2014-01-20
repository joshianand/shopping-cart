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
 * Template Name: My Home Page
 */

get_header(); ?>
<?php $html = get_template_directory_uri(''); ?>

			<section>
				<div class="section_container">
					<div class="top_section">
						<div class="left_content">
							<p>
								FFN DIGITALE AGENCY DIF
								GAAT VOR FFN
								VOLLEDIGE OPLOSSING
							</p>
						</div>
						<div class="right_content">							
							<div id="slider_img">						
								<img src="<?php echo $html; ?>/img/slider_img1.png" height="305px" width="538px" alt="">		
								<img src="<?php echo $html; ?>/img/slider_img2.jpg" alt="">	
								<img src="<?php echo $html; ?>/img/slider_img3.jpg" alt="">		
								<img src="<?php echo $html; ?>/img/slider_img4.jpg" alt="">	
								<img src="<?php echo $html; ?>/img/slider_img5.jpg" alt="">									
							</div>							
						</div>
						<br class="clear">
					</div>
					
					<div class="bottom_section">						
						<div class="section_tabs">
							<a href=""><img src="<?php echo $html; ?>/img/design.png" alt=""></a>
						</div>
						<div class="section_tabs">
							<a href=""><img src="<?php echo $html; ?>/img/development.png" alt=""></a>
						</div>
						<div class="section_tabs">
							<a href=""><img src="<?php echo $html; ?>/img/marketing.png" alt=""></a>
						</div>
						<br class="clear">					
					</div>		
				</div>
			</section>	<!-- Section ends here -->		
		</div><!-- Inner_Container class ends here -->
	</div><!-- Container class ends here -->
	<div class="push"></div>
</div><!-- Wrapper class ends here -->

<?php get_footer(); ?>