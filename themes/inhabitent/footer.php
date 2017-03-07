<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */
?>


			<footer id="colophon" class="site-footer" role="contentinfo">
				 <div class="footer-blocks container">
					 		
                    <div class="footer-block-item">
                      <div class="contact">
                         <h3>Contact Info</h3>
                         <p><i class="fa fa-envelope"></i><a href="mailto:info@inhabitent.com">info@inhabitent.com</a></p>
                         <p><i class="fa fa-phone"></i><a href="tel:5553434567891">778-456-7891</a></p>
                         <p>
                            <span><i class="fa fa-facebook-square"></i></span>
                            <span><i class="fa fa-twitter-square"></i></span>
                            <span><i class="fa fa-google-plus-square"></i></span>
                         </p>
                      </div> <!-- contact -->
                   </div>

                    <div class="footer-block-item">
                        <div class="business-hours">
                            <h3>Business Hours</h3>
                            <p><span class="day-of-week">Monday-Friday:</span> 9am to 5pm</p>
                            <p><span class="day-of-week">Saturday:</span> 10am to 2pm</p>
                            <p><span class="day-of-week">Sunday:</span> Closed</p>
                        </div> <!-- business-hours -->
                    </div>

					<div class="footer-block-item">
                        <div class="text-logo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg" alt="Image of Inhabitent logo" />
                            </a>
                        </div><!-- text-logo -->
                    </div>

                </div><!--footer-blocks -->
                <div class="site-info">
                    <div class="container">
                        Copyright &copy; 2016 Inhabitent
                    </div>
                </div>
            </footer>


		<?php wp_footer(); ?>
    <script type="text/javascript">
      $('#site-navigation .search-submit').click(function(e){
          e.preventDefault();
          e.stopPropagation();
          $('#site-navigation .search-form label').toggle(400);
          $('#site-navigation .search-form input[type="search"]').focus()
      });
      $(window).load(function(){
        $(window).scroll();
      });
    </script>
	</body>
</html>
