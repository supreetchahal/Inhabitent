<?php
/**
 * The template for displaying archive for the products post type (shop page).
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
        <?php if ( have_posts() ) : ?>
            <header class="page-header">
                <?php
                    function product_archive_title($title) {
                        if(is_post_type_archive('products')) {
                            $title = 'Shop Stuff';
                        }
                        return $title;
                        }
                        add_filter('get_the_archive_title', 'product_archive_title');
                        the_archive_title( '<h1 class="page-title">', '</h1>' );

                        the_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?>
                    <ul class="product-type-list">
                        <?php
                            $terms = get_terms( array(
                            'taxonomy' => 'product_type',
                            'orderby' => 'name', ));
                            foreach ($terms as $term) :
                            $url = get_term_link ($term->slug , 'product_type');
                        ?>
                        <li>
                            <a href ='<?php echo $url ?>' class='button'><h2><?php echo $term->slug;?></h2></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
            </header>

                <ul class="shop-flexbox">
                    <section class="allproducts">
                        <?php /* Start the Loop */ ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                        <li class="shop-product">
                            <div class="archive-product">
                                <a href="<?php the_permalink();?>" ><?php the_post_thumbnail('large'); ?></a>
                            </div>
                            <div class="archive-product-text">
                            <div class="archive-title">
                                <p><?php the_title(); ?></p>
                            </div>
                            <div class="item-price">
                                <?php echo CFS()->get('price'); ?>
                            </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
                    </section>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>
