<?php
/**
 * The template for displaying portfolio archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sydney Child
 */
get_header();
?>

<header class="page-header">
    <?php
    ///the_archive_title( '<h3 class="archive-title">', '</h3>' );
    ///the_archive_description( '<div class="taxonomy-description">', '</div>' );
    ?>
</header><!-- .page-header -->

<div id="primary" class="content-area <?php echo sydney_blog_layout(); ?>">
    <main id="main" class="post-wrap roll-team carousel owl-carousel owl-theme" role="main" style="display:block;">
		<?php
        if (have_posts()) {
			while (have_posts()) {
                the_post();

				/* Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				*/
				get_template_part( 'content-portfolio', get_post_format() );
            }
            
			the_posts_navigation();
        }
        else {
            get_template_part( 'content', 'none' );
        }
        
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>

