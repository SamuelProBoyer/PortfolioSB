<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portfolio_SB
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div class="container">
			<div class="row archive-project">
				<?php if ( have_posts() ) : ?>
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post(); ?>
							<div class="project">
								<div class="col-md-7 reveal image">
									<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('singlepost-thumb'); ?>" alt="Test"></a>
								</div>
								<div class="col-md-5 revealFromLeft">
									<h3><?php the_title(); ?></h3>
									<p><?php the_content(); ?></p>
								</div>
							</div>
						
						 <?php
						// get_template_part( 'template-parts/content-page', get_post_type() );
					endwhile;
				
				else :
					get_template_part( 'template-parts/content', 'none' );
				endif;
				?>
			</div>
		</div>

	</main><!-- #main -->

<?php
get_footer();
