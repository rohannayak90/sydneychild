<?php
	add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
	function my_theme_enqueue_styles() {
		wp_enqueue_style( 'child-style', get_stylesheet_uri(),
			array( 'parenthandle' ), 
			wp_get_theme()->get('Version') // this only works if you have Version in the style header
		);
	}

	// add_filter('excerpt_more', 'get_read_more_link');
	// add_filter('the_content_more_link', 'get_read_more_link');
	// function get_read_more_link() {
  	// 	return ' &nbsp;...&nbsp;<a href="' . get_permalink() . '">[Read&nbsp;More]</a>';
	// }

    /// Adds the 'Custom Fields' options to the Portfolio Editor page
    // add_action('init', 'jetpackme_add_cf_support_portfolio');
    // function jetpackme_add_cf_support_portfolio() {
    //     add_post_type_support( 'jetpack-portfolio', 'custom-fields' );
    // }

 ?>