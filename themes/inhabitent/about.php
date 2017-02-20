<?php
/**
 * Template Name: About Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
    <div class="aboutus-page-wrapper">
    	<div class="about-content">
            <div id="primary" class="about-area">
                <main id="main" class="site-main" role="main">
                    <section class="about-header">
                        <h1>About</h1>
                    </section>
                    <section class="about-container container">
                        <div class=" about-paragraphs">
                            <h2 class="about-title">Our Story</h2>
                                <?php echo CFS()->get( 'our_story' ); ?>
                            <h2 class="about-title">Our Team</h2>
                                <?php echo CFS()->get( 'our_team' ); ?>
                        </div>
                    </section>
                </main><!-- #main -->
            </div><!-- #primary -->
        </div>
    </div><!-- aboutus-page-wrapper -->

<?php get_footer(); ?>
