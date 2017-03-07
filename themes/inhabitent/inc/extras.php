<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );



/**
* Custom logo for the login screen.
*/
function my_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a{
				background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-text-dark.svg);
				 background-position: center center;
				 background-repeat: no-repeat;
				 background-size: 250px 250px;
				 width:250px;
        }

				#login .button.button-primary{
					background-color: #2488a3;
				}

				.login #login_error, .login .message{
				border-left: 4px solid #2488a3 !important;
			}

    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Inhabitent Online Hipster Camping Store';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );



function inhabitent_about_css(){
			if(!is_page_template('about.php')){
				return;

			}

			$image=CFS ()->get('banner_image');
					if(!$image) {
						return;
					}

			$hero_css = ".page-template-about .entry-header {
        background:
            linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),
            url({$image}) no-repeat center bottom;
        background-size: cover, cover;
				height: 100vh;
}";

			wp_add_inline_style( 'red-starter-style', $hero_css);
}
add_action( 'wp_enqueue_scripts','inhabitent_about_css');
