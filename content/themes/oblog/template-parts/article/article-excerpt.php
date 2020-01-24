<article <?php post_class('post'); ?>>
    <h1 class="post__title">
        <a href="<?php the_permalink(); ?>">
            <span>
                <?php the_title(); ?>
            </span>
        </a>
    </h1>

    <img src="https://source.unsplash.com/700x700/?city-black-and-white" alt="city" class="post__image">

    <div class="post__meta">
        <?php the_date(); ?> &bull; by <?php the_author(); ?>
    </div>

    <div class="post__content">
        <p><?php the_excerpt(); ?></p>

        <a href="<?php the_permalink(); ?>">Lire la suite</a>
    </div>
</article>
