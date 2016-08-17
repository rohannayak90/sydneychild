<?php
2	/**
3	 * The Template for displaying all single projects.
4	 *
5	 * @package Illustratr
6	 */
7	
8	get_header(); ?>
9	
10	        <div id="primary" class="content-area">
11	                <main id="main" class="site-main" role="main">
12	
13	                <?php while ( have_posts() ) : the_post(); ?>
14	
15	                        <?php get_template_part( 'content', 'portfolio-single' ); ?>
16	
17	                        <?php
18	                                // If comments are open or we have at least one comment, load up the comment template
19	                                if ( comments_open() || '0' != get_comments_number() ) :
20	                                        comments_template();
21	                                endif;
22	                        ?>
23	
24	                        <?php
					///illustratr_post_nav();
				?>
25	
26	                <?php endwhile; // end of the loop. ?>
27	
28	                </main><!-- #main -->
29	        </div><!-- #primary -->
30	
31	<?php get_sidebar(); ?>
32	<?php get_footer(); ?>