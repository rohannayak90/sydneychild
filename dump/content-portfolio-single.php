<?php
	/**
     * This is working for the individual portfoio content show
	 * @package Sydney Child
	 */
	
	// Access global variable directly to adjust the content width for portfolio single page
	if ( isset( $GLOBALS['content_width'] ) ) {	        $GLOBALS['content_width'] = 1100;	}
	?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	        <header class="entry-header">
	                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	
	                <?php echo get_the_term_list( $post->ID, 'jetpack-portfolio-type', '<span class="portfolio-entry-meta">', _x(', ', 'Used between list items, there is a space after the comma.', 'sydneychild' ), '</span>' ); ?>
	        </header><!-- .entry-header -->

	        <div class="entry-content">
	                <?php the_content(); ?>
	                <?php
	                        wp_link_pages( array(
                             'before'   => '<div class="page-links clear">',
	                                'after'    => '</div>',
	                                'pagelink' => '<span class="page-link">%</span>',
	                        ) );
             ?>
	        </div><!-- .entry-content -->

	        <footer class="entry-meta">
	                <?php
	                        /* translators: used between list items, there is a space after the comma */
	                        $tags_list = get_the_term_list( $post->ID, 'jetpack-portfolio-tag', '', __( ', ', 'sydneychild' ) );
	                        if ( $tags_list ) :
             ?>
	                        <span class="tags-links"><?php printf( __( 'Tagged %1$s', 'sydneychild' ), $tags_list ); ?></span>
	                <?php endif; ?>
	
	                <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
	                        <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'sydneychild' ), __( '1 Comment', 'sydneychild' ), __( '% Comments', 'sydneychild' ) ); ?></span>
	                <?php endif; ?>
	
	                <?php edit_post_link( __( 'Edit', 'sydneychild' ), '<span class="edit-link">', '</span>' ); ?>
	        </footer><!-- .entry-meta -->
	</article><!-- #post-## -->