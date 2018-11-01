<?php get_header(); ?>
  <main>
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
        <div class="blog-detail">
          <div class="text-container">
            <div class="single-blog">
              <div class="single-blog--heading clearfix">
                <span class="date"><?php echo get_the_date( 'F j, Y' ); ?></span>
                <div class="posted-by">by<span><?php the_author(); ?></span></div>
              </div>
              <div class="single-blog--img bg-img">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
              </div>
              <h2 class="h2"><?php echo get_the_title(); ?></h2>
              <div class="single-blog--text">
								<?php the_content(); ?>
              </div>

<!--               <div class="submit-box">
                <div class="submit-form">
                  <h3 class="h3">Submit a Comment</h3>
                  <p>Your email address will not be published.</p>
	                <?php // comments_template(); ?>
                </div>
              </div> -->

							<?php
							// $id      = $post->ID;
							// $author  = get_bloginfo( 'name' );
							// $url     = get_the_permalink( $id );
							// $title   = get_the_title( $id );
							// $excerpt = get_the_excerpt( $id );
							// $image   = get_template_directory_uri() . "/images/logo.jpg";
							// if ( has_post_thumbnail( $id ) ) {
							// 	$image_obj = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'full' );
							// 	$image     = $image_obj[0];
							// } else {
							// 	$image = get_template_directory_uri() . "/images/logo.jpg";
							//} ?>

              <div class="share clearfix">
                <span>share</span>
                <ul class="share-list">
                  <li class="share-list--item tw">
                    <a class="sbg-button" href="javascript:;"
                       data-sbg-network="twitter"
                       data-sbg-text="<?php echo $excerpt; ?> <?php echo $url; ?>"
                       data-sbg-via="<?php echo $author; ?>"
                       data-sbg-hashtags="web"
                       data-sbg-width="600"
                       data-sbg-height="258">
                      <i class="fab fa-twitter"></i>Twitter
                    </a>
                  </li>
                  <li class="share-list--item in">
                    <a class="sbg-button" href="javascript:;"
                       data-sbg-network="linkedin"
                       data-sbg-url="<?php echo $url; ?>"
                       data-sbg-title="<?php echo $title; ?>"
                       data-sbg-source="<?php echo $author; ?> <?php echo $url; ?>"
                       data-sbg-summary="<?php echo $excerpt; ?>"
                       data-sbg-width="585"
                       data-sbg-height="471">
                      <i class="fab fa-linkedin-in"></i>LinkedIn
                    </a>
                  </li>
                  <li class="share-list--item email">
                    <a class="sbg-button" href="javascript:;"
                       data-sbg-network="email"
                       data-sbg-subject="<?php echo $author; ?> - <?php echo $title; ?>"
                       data-sbg-body="<?php echo $title; ?>, visit <?php echo $url; ?>">
                      <i class="fas fa-envelope"></i>Email
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
			<?php endwhile; ?>
		<?php endif; ?>
  </main>

<?php get_footer(); ?>