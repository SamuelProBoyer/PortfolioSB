<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Portfolio_SB
 */

get_header();
?>

<main id="primary" class="site-main">

	<div class="container">
		<div class="row archive-project">
			<?php
			while (have_posts()) :
				the_post(); ?>
				<div class="project">
					<div class="col-md-6 reveal image">
						<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('singlepost-thumb'); ?>" alt="Test"></a>
					</div>
					<div class="col-md-6 revealFromLeft">
						<h3><?php the_title(); ?></h3>
						<p><?php the_content(); ?></p>
						<!-- <a class="button-30" href="<?php echo $projets_archive_link  ?>"><?php echo $projet_link['title'] ?></a> -->
					</div>
				</div>
			<?php endwhile; // End of the loop.
			?>
		</div>
	</div>

</main><!-- #main -->

<?php
get_footer();
