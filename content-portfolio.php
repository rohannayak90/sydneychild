<?php
/**
 * This is to show the individual items in the Portfolio archive page
 * @package Sydney Child
 */
?>

<div class="owl-item col-md-4">
    <div class="team-item">
        <div class="team-inner">
            <div class="pop-overlay">
                <div class="team-pop">
                    <div class="team-info">                        
                        <div class="name"><?php the_title(); ?></div>
                        <div class="pos"><a href="<?php echo get_post_meta($post->ID, 'wpcf-project-link', true); ?>">View the Project</a></div>
                        
                    </div>
                </div>
            </div>
            <div class="avatar">
                <?php the_post_thumbnail(); ?>
                
                <!--<img width="100%" height="100%" src="http://demo.athemes.com/sydney/wp-content/uploads/sites/35/2015/03/emp5.jpg" class="attachment-sydney-medium-thumb size-sydney-medium-thumb wp-post-image" alt="emp5" srcset="http://demo.athemes.com/sydney/wp-content/uploads/sites/35/2015/03/emp5.jpg 400w, http://demo.athemes.com/sydney/wp-content/uploads/sites/35/2015/03/emp5-150x150.jpg 150w, http://demo.athemes.com/sydney/wp-content/uploads/sites/35/2015/03/emp5-300x300.jpg 300w, http://demo.athemes.com/sydney/wp-content/uploads/sites/35/2015/03/emp5-180x180.jpg 180w" sizes="(max-width: 400px) 100vw, 400px">-->
            </div>
        </div>
        <div class="team-content">
            <div class="name">
                <a href="<?php echo get_post_meta($post->ID, 'wpcf-project-link', true); ?>"><?php the_title(); ?></a>
            </div>            
        </div>
    </div>
</div>
