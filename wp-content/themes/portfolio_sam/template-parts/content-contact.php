<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portfolio_SB
 */
$contact_title = get_field('contact_title');
$contact_content = get_field('contact_content');
$contact_link = get_field('contact_link');
?>

<section id="contact">


	<?php portfolio_sam_post_thumbnail(); ?>

	
		<div class="container-fluid container-contact">
			<div class="row">
				<div class="col-md-6 home-contact-text">
					<div class="contact-txt revealFromRight">
						<h2><?php echo $contact_title ?></h2>
						<p><?php echo $contact_content ?></p>
						<!-- <div class="socials">
							<span><a  href="mailto:samuelpro123@outlook.fr" ><i class="fa sharp fa solid fa-envelope"></i></a></span>
							<span><a href="https://www.linkedin.com/in/samuel-boyer-9328601ba/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></span>
							<span><a href="https://github.com/SamuelProBoyer"><i class="fa-brands fa-square-github"></i></a></span>
						</div> -->




					</div>
				</div>
				<div class="col-md-6 ">
					<ul>
						<li><a href="mailto:samuelpro123@outlook.fr"><i class="fa sharp fa solid fa-envelope"></i></a></li>
						<li><a href="https://www.linkedin.com/in/samuel-boyer-9328601ba/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
						<li><a href="https://github.com/SamuelProBoyer"><i class="fa-brands fa-square-github"></i></a></li>
					</ul>
				</div>

			</div>
		</div>



</section><!-- #post-<?php the_ID(); ?> -->