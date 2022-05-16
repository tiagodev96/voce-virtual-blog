<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blog-voce-virtual
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet">
	<script type="text/javascript" src="https://unpkg.com/menu-hamburger@2.0.0/lib/menu-hamburger.min.js"></script>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_theme_root_uri(); ?>/blog-voce-virtual/allposts.css">
	<link rel="stylesheet" href="<?php echo get_theme_root_uri(); ?>/blog-voce-virtual/pages.css">
	<link rel="stylesheet" href="<?php echo get_theme_root_uri(); ?>/blog-voce-virtual/single.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'blog-voce-virtual'); ?></a>

		<header id="masthead" class="site-header">
			<div class="site-branding">
				<a href="<?php echo get_site_url(); ?>">
					<img src="<?php echo get_theme_root_uri(); ?>/blog-voce-virtual/images/logo.png" alt="Logo do Site">
				</a>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->
