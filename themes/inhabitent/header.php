<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<!-- <script src="https://use.fontawesome.com/a64733d244.js"></script> -->
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,700" rel="stylesheet">




	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html('Skip to content'); ?></a>

			<header id="masthead" class="site-header affix" role="banner" <?php echo ((is_front_page()) ? 'data-spy="affix" data-offset-top="500"' : ' '); ?>>
			<!-- data-spy="affix" data-offset-top="197" -->
				<div class="container">
					<div class="site-branding">
						<div class="logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<?php //bloginfo( 'name' ); ?>
								<h1 class="site-title "></h1>
							</a>
							<!-- <p class="site-description"><?php //bloginfo( 'description' ); ?></p> -->
						</div>
					</div><!-- .site-branding -->


				<nav id="site-navigation" class="main-navigation clearfix navbar navbar-right" role="navigation">
					<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button> -->
						<div class="menu-main-navigation-container ">

					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					<?php get_search_form(); ?>

           			</div>
        
           			 <!-- <a class="logo" href="<?php echo get_bloginfo('url') ?>"><img src="<?php echo get_bloginfo('template_url') ?>/images/logos/inhabitent-logo-tent.svg"/></a> -->

				</nav><!-- #site-navigation -->
				</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content"></div>
