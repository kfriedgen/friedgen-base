<a href="<?php the_permalink(); ?>" class="blogroll__single">
    <article <?php post_class(); ?>>
        <span class="blogroll__feature-image">
            <?php the_post_thumbnail("large");  ?>
        </span>
        <span class="blogroll__information">
            <h3 class="blogroll__title">
                <?php the_title(); ?>
            </h3>
            <span class="blogroll__date">
                <?php the_date(); ?>
            </span>
        </span>

    </article>
</a>
