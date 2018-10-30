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
				<h2 class="h2">LEADERSHIP</h2>
				<strong>We created Reserve Trust as a new business model to be the truly trusted financial partner for businesses.</strong>
			</div>
			<ul class="lidership-list">
				<li class="li lidership-list--item">
					<div class="img bg-img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/item-10.png" alt="image description">
					</div>
					<div class="lidership-list-descr">
						<div class="top-info">
							<h3>JUSTIN GUILDER</h3>
							<span class="position">PRESIDENT</span>
						</div>
						<div class="lidership-list-info">
							<p>Justin brings over 15 years of experience in trusts, banking, and financial services from both a business and legal perspective. Prior to his role as the President and CEO, he was Reserve Trust’s General Counsel. He served previously as the Managing Director of PennAve One, a boutique investment firm headquartered in Washington, D.C.</p>
						</div>
					</div>
				</li>
				<li class="li lidership-list--item">
					<div class="img bg-img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/director-5.png" alt="image description">
					</div>
					<div class="lidership-list-descr">
						<div class="top-info">
							<h3>PAUL NELSON</h3>
							<span class="position">CHIEF COMPLIANCE & TRUST OFFICER</span>
						</div>
						<div class="lidership-list-info">
							<p>Paul has over 40 years of experience in banking and trusts.  He most recently served as the Chief Law and Compliance Officer of NewTower Trust Company, a $7 billion state chartered commercial bank.  He also has served as legislative counsel to the U.S. Comptroller of the Currency, Acting Regional Counsel for Comptroller in San Francisco, and Director of Pricewaterhouse Coopers.</p>
						</div>
					</div>
				</li>
				<li class="li lidership-list--item">
					<div class="img bg-img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/item-7.png" alt="image description">
					</div>
					<div class="lidership-list-descr">
						<div class="top-info">
							<h3>ROB AYERS</h3>
							<span class="position">DIRECTOR OF SALES & MARKETING</span>
						</div>
						<div class="lidership-list-info">
							<p>Rob has over 25 years of experience in payments, managing business development for everything from global remittances to digital payments.  Rob has developed new products and launched new markets for Chartwell, Travelex, Coinstar, WorldRemit, MoneyGram and American Express.</p>
						</div>
					</div>
				</li>
				<li class="li lidership-list--item">
					<div class="img bg-img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/item-8.png" alt="image description">
					</div>
					<div class="lidership-list-descr">
						<div class="top-info">
							<h3>BRANDI REYNOLDS</h3>
							<span class="position">BSA Officer</span>
						</div>
						<div class="lidership-list-info">
							<p>Brandi Reynolds has over 15 years of experience in the financial services industry. She has served in many roles throughout her career, including Deputy Compliance Officer for Advance America and Director of Compliance for Chartwell Compliance. Brandi has extensive expertise in state and federal compliance and risk management.</p>
						</div>
					</div>
				</li>
				<li class="li lidership-list--item">
					<div class="img bg-img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/item-9.png" alt="image description">
					</div>
					<div class="lidership-list-descr">
						<div class="top-info">
							<h3>LES REVZON</h3>
							<span class="position">DIRECTOR OF OPERATIONS</span>
						</div>
						<div class="lidership-list-info">
							<p>Les has over 40 years of experience managing operations for banks and trust companies. He has led systems integrations and product development/implementation for Fleet Bank, Chase Manhattan, Connecticut National Bank, and Shawmut Bank.</p>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>	
</main><!-- .site-main --><!-- .content-area -->

<?php get_footer(); ?>


