<?php

get_header(); ?>
<main>
	<div class="directors">
		<div class="container">
			<h1 class="h1">BOARD OF DIRECTORS</h1>
			<div class="blog-logo bg-img"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" alt="image description"></div>
			<ul class="director-list">
				<?php 

				$posts = get_field('di_a_top_directors', 'cpt_directors');

				if( $posts ): ?>

				    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
				        <?php setup_postdata($post); ?>

								<li class="director-list--item mod-big">
									<a href="<?php echo get_permalink(); ?>">
										<span class="director-photo bg-img">
											<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
										</span>
										<span class="info">
											<h3 class="h3"><?php the_title(); ?></h3>
											<span class="position"><?php echo get_field('di_position'); ?></span>
											<span class="descr">
												<p><?php the_excerpt(); ?></p>
											</span>
										</span>
									</a>
								</li>


				    <?php endforeach; ?>
				  
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>

				<?php 

				$posts = get_field('di_a_bottom_directors', 'cpt_directors');

				if( $posts ): ?>

				    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
				        <?php setup_postdata($post); ?>

							<li class="director-list--item">
								<a href="<?php echo get_permalink(); ?>">
									<span class="director-photo bg-img">
										<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
									</span>
									<span class="info">
										<h3 class="h3"><?php the_title(); ?></h3>
										<span class="descr">
											<p><?php the_excerpt(); ?></p>
										</span>
									</span>
								</a>
							</li>


				    <?php endforeach; ?>
				  
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</main>

<?php get_footer(); ?>