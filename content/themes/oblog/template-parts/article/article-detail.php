<article <?php post_class('post'); ?> style="width: 100%;">
    <h1 class="post__title">
            <span>
                <?php the_title(); ?>
            </span>
    </h1>

    <img src="https://source.unsplash.com/700x700/?city-black-and-white" alt="city" class="post__image">

    <div class="post__meta">
        <?php the_date(); ?> &bull; by <?php the_author(); ?>
    </div>

    <div class="post__content">
        <p><?php the_content(); ?></p>
    </div>
</article>
