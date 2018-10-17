<?php
/*
Template Name: Blog Detail
*/
get_header(); ?>
<main>
	<div class="blog-detail">
		<div class="text-container">
			<div class="single-blog">
				<div class="single-blog--heading clearfix">
					<span class="date">AUGUST 3, 2018</span>
					<div class="posted-by">by<span>Justin Guilder</span></div>
				</div>
				<div class="single-blog--img bg-img">
					<img src="<?php echo get_template_directory_uri(); ?>/images/blog-item.png" alt="image description">
				</div>
				<h2 class="h2">Who is The Reserve Trust Company?</h2>
				<div class="single-blog--text">
					<p>We are a dynamic financial institution created and developed by banking experts.  We represent a new evolution in the delivery of financial services, an innovative banking business model.  We provide escrow-based deposit accounts and serve as a trust intermediary to our business clients to streamline their payment processes, create certainty and reduce risk, while enhancing reconciliation, and allowing our clients to grow their customer base.</p>
					<p>Reserve Trust has an edge over other banking institutions because the deposits received and maintained in our Trust Engine™ are held in escrow, not leveraged or arbitraged for liquidity and lending purposes.  Our conservative business practices are coupled with a keen sense of technology, product development, and customer service.  To ensure the highest quality service, we settle our clients’ transactions directly with the federal payment system and have established a correspondent relationship with J.P. Morgan Chase, N.A.</p>
					<p>Our Trust Engineers take time to understand each client’s needs and provide a tailored solution, delivering security at the speed of reality.</p>
				</div>
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