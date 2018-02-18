<?php
	add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
	function my_theme_enqueue_styles() { 
 		wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
 	} 

	add_filter('excerpt_more', 'get_read_more_link');
	add_filter('the_content_more_link', 'get_read_more_link');
	function get_read_more_link() {
  		return ' &nbsp;...&nbsp;<a href="' . get_permalink() . '">[Read&nbsp;More]</a>';
	}

    /// Adds the 'Custom Fields' options to the Portfolio Editor page
    add_action('init', 'jetpackme_add_cf_support_portfolio');
    function jetpackme_add_cf_support_portfolio() {
        add_post_type_support( 'jetpack-portfolio', 'custom-fields' );
	}
	
	add_action( 'rest_api_init', 'slug_register_portfolio' );
	function slug_register_portfolio() {
		register_rest_field( 'jetpack-portfolio',
			'wpcf-project-link',
			array(
				'get_callback'    => 'slug_get_portfolio',
				'update_callback' => null,
				'schema'          => null,
			)
		);
	}
	/**
	 * Get the value of the "portfolio" field
	 *
	 * @param array $object Details of current post.
	 * @param string $field_name Name of field.
	 * @param WP_REST_Request $request Current request
	 *
	 * @return mixed
	 */
	function slug_get_portfolio( $object, $field_name, $request ) {
		return get_post_meta( $object[ 'id' ], $field_name, true );
	}
 ?>