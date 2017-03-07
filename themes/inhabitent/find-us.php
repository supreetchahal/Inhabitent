
<?php /* Template Name: find-us */ ?>
<!-- this name is to setup the custom page template -->

<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

<div id="content" class="site-content">

	<!-- <div class="container"> -->

		<div id="primary" class="content-area">
     		<main id="main" class="site-main" role="main">
				<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php endwhile; // End of the loop. ?>
			</main><!-- #main -->
		</div><!-- #primary -->


<!-- <div id="secondary" class="widget-area" role="complementary">
	<aside id="text-2" class="widget widget_text"> -->
	<?php get_sidebar(); ?>
	<!-- </aside>
	</div> -->
	<!-- </div> -->
</div>


<?php get_footer(); ?>
