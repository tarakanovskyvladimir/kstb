<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package ZeroGravity
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<a name='inicio_pagina'></a>
<header id="masthead" class="site-header" role="banner">
	<div style="position:relative"><?php get_template_part('menu-movil'); ?></div>
<?php if ( get_header_image() ) { 
		if (get_theme_mod('zerogravity_logo_active') == 1) { 
			$div_image_header = '<section class="logo-header-wrapper flex-container">';
			if (get_theme_mod('zerogravity_logo_center') == 1) $div_image_header = '<div class="logo-header-wrapper" style="text-align:center;">'; }
		else{ $div_image_header = '<section class="image-header-wrapper flex-container">'; } 
		echo $div_image_header; ?>
		<!-- <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a> -->
		<div class="logo-top"><img src="/wp-content/themes/zerogravity/img/logo-top.jpg" alt="База СТБ"></div>
		<div class="head-tel"><a href="tel:+79624410220">8 962 441 02 20</a>
		<a href="tel:+78652467878">8 (8652) 46 78 78</a>
		<span>8 962 441 02 20<br>8 (8652) 46 78 78</span></div>
		<address>г. Ставрополь, ул Доваторцев, 183В</address>
		</section><!-- .logo-header-wrapper or .image-header-wrapper -->
<?php }else{ ?>
	<div class="blog-info-sin-imagen"><hgroup>
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo('name', 'display') ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
	</hgroup></div>
<?php } //if ( get_header_image() ) ?>
		
	<nav id="site-navigation" class="main-navigation" role="navigation">
		<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'zerogravity' ); ?>"><?php _e( 'Skip to content', 'zerogravity' ); ?></a>
		<section class="fp-container flex-container"><?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
	
		<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<label for="s" class="assistive-text"><?php _e( 'Search', 'zerogravity' ); ?></label>
			<input type="text" class="txt-search-n" name="s" id="s" />
			<input type="submit" name="submit" id="btn-search-n" value="<?php _e( 'Поиск', 'zerogravity' ); ?>" />
		</form><div id="but_mob_menu">Меню <div class="cmn-toggle-switch cmn-toggle-switch__htx"><span>toggle menu</span></div></div>
		</section>

	</nav><!-- #site-navigation -->


	</header><!-- #masthead -->
<div id="page" class="hfeed site">
	<div class="top-bar">
		<?php $palabra_menu = (get_theme_mod('zerogravity_mostrar_menu_junto_icono', '') == 1) ? ' ' . __( 'MENU', 'zerogravity') : ''; ?>
		
		<div class="boton-menu-movil"><i class="fa fa-align-justify"></i><?php echo $palabra_menu; ?></div>
		<?php if (get_theme_mod('zerogravity_blog_title_top_bar', 1) == 1) : ?>
		<div class="blog-title-wrapper"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></div>
		<?php endif; ?>
		<div class="toggle-search"><i class="fa fa-search"></i></div>
		<div class="social-icon-wrapper">
			<?php if( get_theme_mod( 'zerogravity_twitter_url' ) !== '' ) { ?>
				<a href="<?php echo esc_url(get_theme_mod( 'zerogravity_twitter_url', 'https://twitter.com' )); ?>" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a> 
			<?php } ?>
			
			<?php if( get_theme_mod( 'zerogravity_facebook_url' ) !== '' ) { ?>
				<a href="<?php echo esc_url(get_theme_mod( 'zerogravity_facebook_url', 'https://facebook.com' )); ?>" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
			<?php } ?>
			
			<?php if( get_theme_mod( 'zerogravity_googleplus_url' ) !== '' ) { ?>
				<a href="<?php echo esc_url(get_theme_mod( 'zerogravity_googleplus_url', 'https://plus.google.com' )); ?>" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a>
			<?php } ?>
			
			<?php if( get_theme_mod( 'zerogravity_linkedin_url' ) !== '' ) { ?>
		 		<a href="<?php echo esc_url(get_theme_mod( 'zerogravity_linkedin_url', 'https://linkedin.com' )); ?>" title="LindedIn" target="_blank"><i class="fa fa-linkedin"></i></a>
			<?php } ?>
			
			<?php if( get_theme_mod( 'zerogravity_youtube_url' ) !== '' ) { ?>
		 		<a href="<?php echo esc_url(get_theme_mod( 'zerogravity_youtube_url', 'https://youtube.com' )); ?>" title="YouTube" target="_blank"><i class="fa fa-youtube"></i></a>
			<?php } ?>
			
			<?php if( get_theme_mod( 'zerogravity_instagram_url' ) !== '' ) { ?>
		 		<a href="<?php echo esc_url(get_theme_mod( 'zerogravity_instagram_url', 'http://instagram.com' )); ?>" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a>
			<?php } ?>
			
			<?php if( get_theme_mod( 'zerogravity_pinterest_url' ) !== '' ) { ?>
		 		<a href="<?php echo esc_url(get_theme_mod( 'zerogravity_pinterest_url', 'https://pinterest.com' )); ?>" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
			<?php } ?>
			
			<?php if( get_theme_mod( 'zerogravity_rss_url' ) !== '' ) { ?>
				<a class="rss" href="<?php echo esc_url(get_theme_mod( 'zerogravity_rss_url', 'http://wordpress.org' )); ?>" title="RSS" target="_blank"><i class="fa fa-rss"></i></a>			
			<?php } ?>
		</div><!-- .social-icon-wrapper -->	
	</div><!-- .top-bar --->
	
	<div class="wrapper-search-top-bar"><div class="search-top-bar"><?php get_template_part('searchform-toggle'); ?></div></div>
	
	
<?php if (function_exists('yoast_breadcrumb') && $_SERVER["REQUEST_URI"] != "/") 
{yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
	<div id="main" class="wrapper">