<?php
/*
Template Name: Trust engine
*/
get_header(); ?>
<main>
	<div class="trust-engine">
		<div class="container">
			<h1 class="h1">TRUST ENGINE™</h1>
			<div class="engine-video">
				<!-- <video autoplay loop src="<?php echo get_field('add_video'); ?>"></video> -->
			</div>
			<div class="trust-description">
				<p><?php echo get_field('text_under_video'); ?></p>
			</div>
		</div>
	</div>
	<div class="secure-payments">
		<div class="secure-logo bg-img"><img src="<?php echo get_template_directory_uri(); ?>/images/green-logo.jpg" alt="image description"></div>
		<h2 class="h2">SECURE PAYMENTS</h2>
		<ul class="payments-list">

			<?php
			// check if the repeater field has rows of data
			if( have_rows('secure_payments_item') ):
			 	// loop through the rows of data
			    while ( have_rows('secure_payments_item') ) : the_row(); ?>

			    		<li class="payments-list--item">
							<div class="img">
								<img src="<?php the_sub_field('icon'); ?>" alt="icon">
							</div>
							<h3 class="h3"><?php the_sub_field('text_under_icon'); ?></h3>
						</li>

			<?php endwhile;
			else :
			    // no rows found
			endif;
			?>

		</ul>
	</div>
	<div class="features">
		<div class="secure-logo bg-img"><img src="<?php echo get_template_directory_uri(); ?>/images/green-logo.jpg" alt="image description"></div>
		<h2 class="h2">Feautures</h2>
		<ul class="secure-list">
			<?php
			// check if the repeater field has rows of data
			if( have_rows('feautures_items') ):
			 	// loop through the rows of data
			    while ( have_rows('feautures_items') ) : the_row(); ?>

					<li class="secure-list--item">
						<div class="img">
							<img src="<?php the_sub_field('icon'); ?>" alt="icon">
						</div>
						<div class="detail">
							<h3 class="h3"><?php the_sub_field('title'); ?></h3>
							<p><?php the_sub_field('text_under_icon'); ?></p>
						</div>
					</li>

			<?php endwhile;
			else :
			    // no rows found
			endif;
			?>

		</ul>
	</div>
	<div class="features mod-benefits">
		<h2 class="h2">BENEFITS</h2>
		<ul class="secure-list">
			<?php
			// check if the repeater field has rows of data
			if( have_rows('benefits_items') ):
			 	// loop through the rows of data
			    while ( have_rows('benefits_items') ) : the_row(); ?>

					<li class="secure-list--item">
						<div class="img">
							<img src="<?php the_sub_field('icon'); ?>" alt="icon">
						</div>
						<div class="detail">
							<h3 class="h3"><?php the_sub_field('title'); ?></h3>
							<p><?php the_sub_field('text_under_icon'); ?></p>
						</div>
					</li>

			<?php endwhile;
			else :
			    // no rows found
			endif;
			?>
		</ul>
	</div>
</main>

<?php get_footer(); ?>