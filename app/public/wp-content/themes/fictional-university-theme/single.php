<?php 
    get_header();
    
    while(have_posts()) {
        the_post(); ?>
        <h2 class="title"><?php the_title(); ?></a></h2>
        <div class="desc"><?php the_content() ?></div>
        
        <?php
    }

    get_footer();
?>