<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package webshowcase
 */
global $webshowcase;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo get_bloginfo( 'name' ); ?> | Reserve Trust</title>
	<meta name="description" content="<?php get_bloginfo( 'description' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="<?php if ( ! empty( $webshowcase['blog_favicon'] ) ) {
		echo $webshowcase['blog_favicon']['url'];
	} ?>" type="image/x-icon">

	<?php wp_head(); ?>

</head>
<header id="header">
	<div class="container clearfix">
		<div class="left-box">
			<a class="default-btn green-btn" href="" class="login">CLIENT LOGIN</a>
		</div>
		<div class="right-box">
			<nav class="contact-nav">
				<ul>
					<li class="phone"><a href="mailto:info@reservetrust.com"><i class="fas fa-envelope"></i></a></li>
					<li class="mail"><a href="tel:720-306-8170"><i class="fas fa-phone"></i></a></li>
				</ul>
			</nav>
		</div>
		<div class="header-logo-block hidden-desc">
				<a class="logo" href="<?php echo get_home_url(); ?>" title="" rel="">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" alt="Logo">
				</a>
			</div>
		<div class="main-nav">
			<div class="menu-header-left">
				<?php wp_nav_menu(array('container' => false, 'items_wrap' => '<ul id="%1$s">%3$s</ul>', 'theme_location'  => 'menu_left')); ?>
			</div>
			<div class="header-logo-block hidden-mob">
				<a class="logo" href="/" title="" rel="">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" alt="Logo">
				</a>
			</div>
			<div class="menu-header-right">
				<?php wp_nav_menu(array('container' => false, 'items_wrap' => '<ul id="%1$s">%3$s</ul>', 'theme_location'  => 'menu_right')); ?>
			</div>
			
		</div>
		

	</div>
</header>
<body <?php body_class( $class ); ?>>


