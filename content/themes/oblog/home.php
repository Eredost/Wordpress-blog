<?php get_header();

if (have_posts()) :
    while (have_posts()) :
        the_post();
        get_template_part('template-parts/article/article-excerpt');
    endwhile;
endif;

get_template_part('template-parts/sidebar/aside');
get_footer();

?>
