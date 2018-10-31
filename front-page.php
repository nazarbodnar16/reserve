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
			<h2 class="h2"><?php echo get_field('partners_section_title'); ?></h2>
			<div class="text-box">
				<p><?php echo get_field('partners_section_subtitle'); ?></p>
			</div>

			<ul class="partners-list">

				<?php
				// check if the repeater field has rows of data
				if( have_rows('partners_logo') ):
				 	// loop through the rows of data
					while ( have_rows('partners_logo') ) : the_row(); ?>

						<li class="li partners-list--item"><img src="<?php the_sub_field('logo'); ?>" alt="Partners logo"></li>

					<?  endwhile;

				else :
				    // no rows found
				endif;
				?>

			</ul>
		</div>
	</div>
	<div class="standarts">
		<div class="green-logo bg-img"><img src="<?php echo get_template_directory_uri(); ?>/images/green-logo.jpg" alt="image description"></div>
		<div class="text-container">
			<div class="heading">
				<h2 class="h2">STANDARDS</h2>
				<strong>Operate in a rich, fully regulated financial ecosystem.</strong>
			</div>
			<ul class="standarts-list">

				<?php
					// check if the repeater field has rows of data
				if( have_rows('standards_list') ):
					 	// loop through the rows of data
					while ( have_rows('standards_list') ) : the_row(); ?>

						<li class="standarts-list--item">
							<div class="img">
								<img src="<?php the_sub_field('icon'); ?>" alt="icon">
							</div>
							<h3 class="h3"><?php the_sub_field('subtitle'); ?></h3>
							<p><?php the_sub_field('description'); ?></p>
						</li>

					<?  endwhile;

				else :
					    // no rows found
				endif;
				?>

			</ul>
		</div>
	</div>
	<div class="lidership">
		<div class="container">
			<div class="heading">
				<h2 class="h2"><?php echo get_field('leadership_section_title'); ?></h2>
				<strong><?php echo get_field('leadership_section_subtitle'); ?></strong>
			</div>
			<ul class="lidership-list">

				<?php
				// check if the repeater field has rows of data
				if( have_rows('leadership_items') ):
				 	// loop through the rows of data
				    while ( have_rows('leadership_items') ) : the_row(); ?>      
				        
				        		<li class="li lidership-list--item">
									<div class="img bg-img">
										<img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('person'); ?>">
									</div>
									<div class="lidership-list-descr">
										<div class="top-info">
											<h3><?php the_sub_field('person'); ?></h3>
											<span class="position"><?php the_sub_field('position'); ?></span>
										</div>
										<div class="lidership-list-info">
											<p><?php the_sub_field('description'); ?></p>
										</div>
									</div>
								</li>

				<?php endwhile;
				else :
				    // no rows found
				endif;
				?>

			</ul>
		</div>
	</div>	
</main><!-- .site-main --><!-- .content-area -->

<?php get_footer(); ?>


