<?php get_header(); ?>
<main>
	<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
	<div class="blog-detail">
		<div class="text-container">
			<div class="single-blog">
				<div class="single-blog--heading clearfix">
					<span class="date"><?php echo get_the_date('F j, Y'); ?></span>
					<div class="posted-by">by<span><?php the_author(); ?></span></div>
				</div>
				<div class="single-blog--img bg-img">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
				</div>
				<h2 class="h2"><?php echo get_the_title(); ?></h2>
				<div class="single-blog--text">
					<?php the_content(); ?>
				</div>
		<?php endwhile; ?>
	<?php endif; ?>
				<div class="submit-box">
					<div class="submit-form">
						<h3 class="h3">Submit a Comment</h3>
						<p>Your email address will not be published.</p>
						<form action="">
							<input class="form-control" type="text" placeholder="Name">
							<input class="form-control" type="text" placeholder="Email">
							<textarea class="form-control" name="" placeholder="Comment"></textarea>
							<input class="default-btn" type="submit" value="SUBMIT COMMENT">
						</form>
					</div>
				</div>
				<div class="share clearfix">
					<span>share</span>
					<ul class="share-list">
						<li class="share-list--item tw">
							<a href=""><i class="fab fa-twitter"></i>Twitter</a>
						</li>
						<li class="share-list--item in">
							<a href=""><i class="fab fa-linkedin-in"></i>LinkedIn</a>
						</li>
						<li class="share-list--item email">
							<a href=""><i class="fas fa-envelope"></i>Email</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>