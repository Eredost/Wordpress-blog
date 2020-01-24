<article <?php post_class('post'); ?> style="width: 100%;">
    <h1 class="post__title">
            <span>
                <?php the_title(); ?>
            </span>
    </h1>

    <div class="post__content" style="max-width: 100%">
        <p><?php the_content(); ?></p>
    </div>
</article>
