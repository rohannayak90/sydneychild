<?php
2	/**
3	 * @package Illustratr
4	 */
5	
6	// Access global variable directly to adjust the content width for portfolio single page
7	if ( isset( $GLOBALS['content_width'] ) ) {
8	        $GLOBALS['content_width'] = 1100;
9	}
10	?>
11	
12	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
13	        <header class="entry-header">
14	                <?php the_title( '<h1 class="entry-title">', 'ILLUSTRATOR</h1>' ); ?>
15	
16	                <?php echo get_the_term_list( $post->ID, 'jetpack-portfolio-type', '<span class="portfolio-entry-meta">', _x(', ', 'Used between list items, there is a space after the comma.', 'illustratr' ), '</span>' ); ?>
17	        </header><!-- .entry-header -->
18	
19	        <div class="entry-content">
20	                <?php the_content(); ?>
21	                <?php
22	                        wp_link_pages( array(
23	                                'before'   => '<div class="page-links clear">',
24	                                'after'    => '</div>',
25	                                'pagelink' => '<span class="page-link">%</span>',
26	                        ) );
27	                ?>
28	        </div><!-- .entry-content -->
29	
30	        <footer class="entry-meta">
31	                <?php
32	                        /* translators: used between list items, there is a space after the comma */
33	                        $tags_list = get_the_term_list( $post->ID, 'jetpack-portfolio-tag', '', __( ', ', 'illustratr' ) );
34	                        if ( $tags_list ) :
35	                ?>
36	                        <span class="tags-links"><?php printf( __( 'Tagged %1$s', 'illustratr' ), $tags_list ); ?></span>
37	                <?php endif; ?>
38	
39	                <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
40	                        <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'illustratr' ), __( '1 Comment', 'illustratr' ), __( '% Comments', 'illustratr' ) ); ?></span>
41	                <?php endif; ?>
42	
43	                <?php edit_post_link( __( 'Edit', 'illustratr' ), '<span class="edit-link">', '</span>' ); ?>
44	        </footer><!-- .entry-meta -->
45	</article><!-- #post-## -->