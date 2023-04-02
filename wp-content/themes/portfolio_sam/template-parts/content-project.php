<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portfolio_SB
 */

$projets_archive_link = get_post_type_archive_link('project');
$projet_title = get_field('projet_title');
$projet_content = get_field('projet_content');
$projet_link = get_field('projet_link');
?>

<section id="projet" >
		<div class="container-fluid container-projet">
			<div class="row">
				<div class="col-md-6 home-projet-img">
				</div>
				<div class="col-md-6 home-projet-text">
						<div class="home-projet-content revealFromLeft">
							<h2><?php echo $projet_title ?></h2>
							<p><?php echo $projet_content ?></p>
							<a class="button-30" href="<?php echo $projets_archive_link  ?>"><?php echo $projet_link['title'] ?></a>
						</div>
					
				</div>
			</div>
		</div>	
</section><!-- #post-<?php the_ID(); ?> -->


