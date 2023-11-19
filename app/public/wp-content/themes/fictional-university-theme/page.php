<?php 

    get_header();
    while(have_posts()) {
        the_post(); ?>
        <h1>This is a page, not a post.</h1>
        <h2 class="title"><?php the_title(); ?></a></h2>
        <div class="desc"><?php the_content() ?></div>
        
        <?php
    }
    get_footer();
?>