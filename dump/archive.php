<?php
    if( is_post_type_archive('jetpack-portfolio') )
        get_template_part('content', 'jetpack-portfolio');

    elseif( is_tax('jetpack-portfolio-type') || is_tax('jetpack-portfolio-tag') )
        get_template_part('archive', 'jetpack-portfolio');

    else continue;
?>