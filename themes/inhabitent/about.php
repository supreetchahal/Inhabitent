<?php
/**
 * Template Name: About
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
    <!-- <div class="aboutus-page-wrapper">
    	<div class="about-content"> -->
         <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                 <article id="post-19" class="post-19 page type-page status-publish hentry">
                  <header class="entry-header custom-hero">
                  <div class="container">
                      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    </div>
                      </header><!-- .entry-header -->

                    <!-- <section class="about-header">
                        <h1>About</h1>
                    </section> -->
                    <section class="about-container container">
                        <div class=" entry-content">
                            <h2 class="about-title">Our Story</h2>
                                <?php echo CFS()->get( 'our_story' ); ?>
                            <h2 class="about-title">Our Team</h2>
                                <?php echo CFS()->get( 'our_team' ); ?>
                        </div>
                    </section>
                    </article>
                </main><!-- #main -->
            </div><!-- #primary -->
        </div>

<?php get_footer(); ?>
