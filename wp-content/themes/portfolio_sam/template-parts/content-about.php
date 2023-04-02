<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portfolio_SB
 */

 $about_title = get_field('about_title');
 $about_content = get_field('about_content');
 $about_link = get_field('about_link');
 

?>

<section id="about" >
		<div class="container-fluid container-about">
			<div class="row">
				<div class="col-md-6 home-about-text">
					<div class="about-txt ">
						<h2 class="revealFromRight"><?php echo $about_title ?></h2>
						<p class="reveal"><?php echo $about_content ?></p>

					</div>
				</div>
				<div class="col-md-6 home-about-img reveal">
					<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio_SB_face.jpg" alt="My face"> -->
				</div>
			</div>
		</div>

		


	
	
	
</section><!-- #post-<?php the_ID(); ?> -->

