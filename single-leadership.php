<?php

get_header(); ?>
<main>
	<div class="director-box">
		<div class="text-container">
			<div class="director">
				<div class="director-info">
					<strong class="name"><?php the_title(); ?></strong>
					<span class="position"><?php echo get_field('di_position'); ?></span>
					<div class="director-photo">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
					</div>
				</div>
				<div class="director-description">

					<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>