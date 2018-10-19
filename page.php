	<?php get_header(); ?>
	<div class="blog-holder">
		<div class="text-container">
			<h1 class="h1"><?php echo get_the_title(); ?></h1>
			<div class="blog-logo bg-img"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" alt="image description"></div>
				<div class="single-blog--text">
					<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>

						<?php endwhile; ?>
					<?php endif; ?>
				</div>
		</div>
	</div>
	<?php get_footer(); ?>


