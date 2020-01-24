<?php

/**
 * Template Name: Page with sidebar
 */

get_header();

if (have_posts()) :
    while (have_posts()) :
        the_post();
        get_template_part('template-parts/page/content');
    endwhile;
endif;

get_template_part('template-parts/sidebar/aside');
get_footer();
