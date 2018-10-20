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
			<h2 class="h2">PARTNERS</h2>
			<div class="text-box">
				<p>Reserve Trust has partnered with the strongest and most trustworthy financial institutions to ensure that you always receive rapid, secure and cost-effective services.</p>
			</div>
			<ul class="partners-list">
				<li class="li partners-list--item"><img src="<?php echo get_template_directory_uri(); ?>/images/partner-1.png" alt="image description"></li>
				<li class="li partners-list--item"><img src="<?php echo get_template_directory_uri(); ?>/images/partner-2.png" alt="image description"></li>
				<li class="li partners-list--item"><img src="<?php echo get_template_directory_uri(); ?>/images/partner-3.png" alt="image description"></li>
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
				<li class="standarts-list--item">
					<div class="img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/standart-1.png" alt="image description">
					</div>
					<h3 class="h3">SAFETY AND SOUNDNESS</h3>
					<p>The Reserve Trust Company is a Colorado chartered trust company, strictly regulated and carefully examined by the Colorado Division of Banking. We comply with federal banking laws and regulations. We are annually audited by a prominent CPA firm to ensure our systems, policies, procedures, and processes are industry leading. Your funds are always protected; they are held separately from our corporate assets and we do not make loans.</p>
				</li>
				<li class="standarts-list--item">
					<div class="img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/standart-2.png" alt="image description">
					</div>
					<h3 class="h3">CYBER SECURITY</h3>
					<p>The Reserve Trust Company conducts annual cybersecurity testing to protect our infrastructure and your funds. We utilize cloud data backup for redundancy, enhanced network security, industry leading encryption, and much more. We protect and respect your information. Our cybersecurity protocols exceed all regulatory and industry standards, including statutory and digital security requirements.</p>
				</li>
			</ul>
		</div>
	</div>	
</main><!-- .site-main --><!-- .content-area -->

<?php get_footer(); ?>


