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
 * Template Name: My Marketing Page
 */

get_header(); ?>
<?php $html = get_template_directory_uri(''); ?>					
				
					<section class="marketing">
						<div class="section_container">
							<div class="marketing_top_section">								
								<div class="marketing_right_content">
									<div class="marketing_content">
										ONTWIKKELING
									</div>
									<div class="marketing-btn">										
										<a href="" class="btn">MAAK EEN AFSPRAAK</a>
									</div>									
								</div>
								<br class="clear">
							</div>
							
							<div class="ontwikkeling_bottom_section">
								<div class="bottom_img">
									<div class="marketing_section_tabs">
										<a href=""><img src="<?php echo $html; ?>/img/website.png" alt=""></a>
									</div>
									<div class="marketing_section_tabs">
										<a href=""><img src="<?php echo $html; ?>/img/webapp.png" alt=""></a>
									</div>		
									<div class="marketing_section_tabs">
										<a href=""><img src="<?php echo $html; ?>/img/mobileapp.png" alt=""></a>
									</div>
									<div class="marketing_section_tabs">
										<a href=""><img src="<?php echo $html; ?>/img/3dapp.png" alt=""></a>
									</div>
									<br class="clear">	
								</div>
								<div class="bottom_text">
									KLIK OP EEN TAB VOOR DETAILS
								</div>
							</div>		
						</div>
					</section>	<!-- Section ends here -->		
				</div><!-- Inner_Container class ends here -->
			</div><!-- Container class ends here -->
			<div class="push"></div>
		</div><!-- Wrapper class ends here -->
		
<?php get_footer(); ?>