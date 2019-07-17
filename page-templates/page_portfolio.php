<?php
/*
	Template Name: Portfolio Page - Child
*/
	get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
			while (have_posts()):
				the_post();
				get_template_part( 'content', 'page' );
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			endwhile; // end of the loop. ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>

