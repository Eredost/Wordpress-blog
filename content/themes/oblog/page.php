<?php
get_header();

if (have_posts()) :
    while (have_posts()) :
        the_post();
        get_template_part('template-parts/page/content');
    endwhile;
endif;

dynamic_sidebar('Widget');

get_footer();
