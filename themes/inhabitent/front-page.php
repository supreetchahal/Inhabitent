<?php
/**
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

<div id="content" class="site-content">

 <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">

<!-- <section class="front-page"> -->

  <section class="home-hero">

    <img src="<?php echo get_bloginfo('template_url') ?>/images/logos/inhabitent-logo-full.svg" class="logo" />

  </section>

<section class="product-info container">
    <?php
    $terms = get_terms( array(
        'taxonomy' => 'product_type',
        'hide_empty' => false,
    ) );
    ?>

  <h2>SHOP STUFF</h2>
  <div class="product-type-blocks">
      <!-- <div class="shop-stuff-container"> -->
      

  <?php foreach($terms as $item) :?>
      <div class="product-type-block-wrapper">
   <!--  <div class="shop-cat-item"> -->

      <?php
      $imgUrl = get_template_directory_uri() . "/images/product-type-icons/" . $item->slug . ".svg";
      $linkUrl = get_home_url() . "/product_type/" . $item->slug;

      ?>

      <img src=" <?php echo $imgUrl ?> "/>
      <p><?php echo $item->description ?></p>
      <a class="btn" href="<?php echo $linkUrl ?>"> <?php echo $item->name ?> Stuff</a>
    </div>
  <?php endforeach ?>
     <!--  </div> -->
   </div>
</section>



<section class="latest-entries">
   <div class="container">

      <h2>Inhabitent Journal</h2>

    <ul>

      <?php
      $args = array(
    	'posts_per_page'   => 3,
    	'orderby'          => 'date',
    	'order'            => 'DESC',
    );
      $news_feed_posts = get_posts( $args );
      foreach ( $news_feed_posts as $post):
        setup_postdata($post);?>

      <li>

        <div class="thumbnail-wrapper">
        <?php if ( has_post_thumbnail() ) : ?>
    			<?php the_post_thumbnail( 'medium' ); ?>
    		<?php endif; ?>
        </div>

        <div class="post-info-wrapper">
          <span class="entry-meta"><?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></span>
          <h3 class="entry-title"><a href="http://localhost/inhabitent/2017/02/18/glamping-made-easy/" rel="bookmark"><?php the_title() ?></a></h3>
          
        </div>
        <a class="black-btn" href="<?php the_permalink() ?>">READ ENTRY</a>

      </li>

    <?php endforeach;
    wp_reset_postdata(); ?>

    </ul>

   </div>
</section>

<section class="adventures container">

<h2>LATEST ADVENTURES</h2>

<!--div class="adventure-container">
<div class="adventure-left">
  <h2>Getting Back to Nature in a Canoe</h2>
  <a href="#" class="inhab-button">READ MORE</a>
</div>

<div class="adventure-right-container">
  <div class="adventure-top-right">
    <h2>A Night with Friends at the Beach</h2>
    <a href="#" class="inhab-button">READ MORE</a>
  </div>

  <div class="adventure-bottom-left">
    <h2>Taking in the View at Big Mountain</h2>
    <a href="#" class="inhab-button">READ MORE</a>
  </div>

  <div class="adventure-bottom-right">
    <h2>Star-Gazing at the Night Sky</h2>
    <a href="#" class="inhab-button">READ MORE</a>
  </div>
</div>
</div-->


<ul class="clearfix">
                                 <li>
                     <div class="story-wrapper">
                                                   <img width="3000" height="2000" src="http://tent.academy.red/wp-content/uploads/2016/04/canoe-girl.jpg" class="attachment-full size-full wp-post-image" alt="A girl paddling a canoe" srcset="http://tent.academy.red/wp-content/uploads/2016/04/canoe-girl.jpg 3000w, http://tent.academy.red/wp-content/uploads/2016/04/canoe-girl-300x200.jpg 300w, http://tent.academy.red/wp-content/uploads/2016/04/canoe-girl-768x512.jpg 768w, http://tent.academy.red/wp-content/uploads/2016/04/canoe-girl-1024x683.jpg 1024w" sizes="(max-width: 3000px) 100vw, 3000px">                                                <div class="story-info">
                           <h3 class="entry-title"><a href="http://tent.academy.red/adventure/getting-back-to-nature-in-a-canoe/" rel="bookmark">Getting Back to Nature in a Canoe</a></h3>                           <a class="white-btn" href="http://tent.academy.red/adventure/getting-back-to-nature-in-a-canoe/">Read More</a>
                        </div>
                     </div>
                  </li>
                                 <li>
                     <div class="story-wrapper">
                                                   <img width="640" height="427" src="http://tent.academy.red/wp-content/uploads/2016/04/beach-bonfire-1024x683.jpg" class="attachment-large size-large wp-post-image" alt="A bonfire with friends on the beach" srcset="http://tent.academy.red/wp-content/uploads/2016/04/beach-bonfire-1024x683.jpg 1024w, http://tent.academy.red/wp-content/uploads/2016/04/beach-bonfire-300x200.jpg 300w, http://tent.academy.red/wp-content/uploads/2016/04/beach-bonfire-768x512.jpg 768w" sizes="(max-width: 640px) 100vw, 640px">                                                <div class="story-info">
                           <h3 class="entry-title"><a href="http://tent.academy.red/adventure/a-night-with-friends-at-the-beach/" rel="bookmark">A Night with Friends at the Beach</a></h3>                           <a class="white-btn" href="http://tent.academy.red/adventure/a-night-with-friends-at-the-beach/">Read More</a>
                        </div>
                     </div>
                  </li>
                                 <li>
                     <div class="story-wrapper">
                                                   <img width="640" height="427" src="http://tent.academy.red/wp-content/uploads/2016/04/mountain-hikers-1024x683.jpg" class="attachment-large size-large wp-post-image" alt="Hikers taking in the view on a mountain" srcset="http://tent.academy.red/wp-content/uploads/2016/04/mountain-hikers-1024x683.jpg 1024w, http://tent.academy.red/wp-content/uploads/2016/04/mountain-hikers-300x200.jpg 300w, http://tent.academy.red/wp-content/uploads/2016/04/mountain-hikers-768x512.jpg 768w" sizes="(max-width: 640px) 100vw, 640px">                                                <div class="story-info">
                           <h3 class="entry-title"><a href="http://tent.academy.red/adventure/taking-in-the-view-at-big-mountain/" rel="bookmark">Taking in the View at Big Mountain</a></h3>                           <a class="white-btn" href="http://tent.academy.red/adventure/taking-in-the-view-at-big-mountain/">Read More</a>
                        </div>
                     </div>
                  </li>
                                 <li>
                     <div class="story-wrapper">
                                                   <img width="640" height="427" src="http://tent.academy.red/wp-content/uploads/2016/04/night-sky-1024x683.jpg" class="attachment-large size-large wp-post-image" alt="Person star-gazing at the night sky" srcset="http://tent.academy.red/wp-content/uploads/2016/04/night-sky-1024x683.jpg 1024w, http://tent.academy.red/wp-content/uploads/2016/04/night-sky-300x200.jpg 300w, http://tent.academy.red/wp-content/uploads/2016/04/night-sky-768x512.jpg 768w" sizes="(max-width: 640px) 100vw, 640px">                                                <div class="story-info">
                           <h3 class="entry-title"><a href="http://tent.academy.red/adventure/star-gazing-at-the-night-sky/" rel="bookmark">Star-Gazing at the Night Sky</a></h3>                           <a class="white-btn" href="http://tent.academy.red/adventure/star-gazing-at-the-night-sky/">Read More</a>
                        </div>
                     </div>
                  </li>
                              </ul>
                              <p class="see-more">
                  <a href="http://tent.academy.red/adventures/" class="btn">More Adventures</a>
               </p>

</section>
<!-- </div> -->


<!-- </section> -->
        </main><!-- #main -->
  </div><!-- #primary -->
</div><!-- #content -->

<?php get_footer(); ?>
