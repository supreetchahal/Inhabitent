<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">


				<div class="site-branding">
					<img src ="<?php echo get_template_directory_uri();?>/images/logos/inhabitent-logo-tent.svg" class ="header-logo"/>
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<ul class ="nav-bar">
						<li class = "nav-item"><a href="#">Shop</a></li>
						<li class = "nav-item"><a href="#">Journal</a></li>
						<li class = "nav-item"><a href="#">About</a></li>
						<li class = "nav-item"><a href="#">Find Us</a></li>
						<li><i class="fa fa-search" aria-hidden="true"></i></li>
					</ul>


				</div><!-- .site-branding -->


					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav> #site-navigation -->
			</header><!-- #masthead -->
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				

			<div id="content" class="site-content">
