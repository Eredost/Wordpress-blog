<article <?php post_class('post'); ?>>
    <h1 class="post__title">
        <a href="<?php the_permalink(); ?>">
            <span>
                <?php the_title(); ?>
            </span>
        </a>
    </h1>

    <!-- <img src="<?php //the_post_thumbnail_url(); ?>" alt="city" class="post__image"> -->
    <?php
    the_post_thumbnail('post-thumbnail', [
        'class' => 'post__image',
        'title' => 'city',
        'sizes' => null,
    ]);
    ?>

    <div class="post__meta">
        <?php the_date(); ?> &bull; by <?php the_author(); ?>
    </div>

    <div class="post__content">
        <p><?php the_excerpt(); ?></p>

        <a href="<?php the_permalink(); ?>">Lire la suite</a>
    </div>
</article>
