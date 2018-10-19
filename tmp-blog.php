<?php
/*
Template Name: Blog
*/
get_header(); ?>
<main>
	<div class="blog-holder">
		<div class="text-container">
			<h1 class="h1">BLOG</h1>
			<div class="blog-logo bg-img"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" alt="image description"></div>
			<ul class="blog-list">

				<?php 

				// Query arguments
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => -1,
					'order' => 'DESC'
				);

				$query = new WP_Query( $args );

				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) { $query->the_post(); ?>
						<?php get_the_title(); ?>
								<li class="blog-list--item">
									<span class="time"><?php echo get_the_date('F j, Y'); ?></span>
									<h2 class="h2"><?php echo get_the_title(); ?></h2>
									<p><?php the_excerpt(); ?></p>
									<a class="default-link" href="<?php echo get_permalink(); ?>">LEARN MORE</a>
								</li>

				<?php	}
				} else {
					// IF nothing was found
				}
				/* Query reset arguments */
				wp_reset_postdata();

				 ?>

			</ul>
		</div>
	</div>
</main>

<?php get_footer(); ?>