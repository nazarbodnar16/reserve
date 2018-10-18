<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package webshowcase
 */
global $webshowcase;
get_header(); ?>

<main id="main">
	<div class="top-baner">
		<div class="text-container">
			<h1 class="h1"><?php echo get_field('hp_top_title'); ?></h1>
			<strong><?php echo get_field('hp_top_subtitle'); ?></strong>
			<div class="text-box">
				<p><?php echo get_field('hp_top_text'); ?></p>
			</div>
			<strong><?php echo get_field('hp_cta_title'); ?></strong>
			<a href="<?php echo get_field('hp_cta_link'); ?>" class="default-btn">LEARN MORE</a>
		</div>
	</div>
	<div class="partners">
		<div class="green-logo bg-img"><img src="<?php echo get_template_directory_uri(); ?>/images/green-logo.jpg" alt="image description"></div>
		<div class="text-container">
			<h2 class="h2">PARTNERS</h2>
			<div class="text-box">
				<p>Reserve Trust has partnered with the strongest and most trustworthy financial institutions to ensure that you always receive rapid, secure and cost-effective services.</p>
			</div>
		</div>
	</div>	
</main><!-- .site-main --><!-- .content-area -->

<?php get_footer(); ?>


