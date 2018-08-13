<div class="search__inner">
    
    <article <?php post_class(); ?>>

        <a class="search__link" href="<?php the_permalink(); ?>">
            
            <div class="search__feature-image">
                <?php the_post_thumbnail("small");  ?>
            </div>
            
            <h2 class="entry-title search__title">
                <?php the_title(); ?>
            </h2>

            <p class="search__meta">
                <span class="search__date">
                    <?php the_time(get_option('date_format')); ?>   
                </span>
            </p>

        </a>    

    </article>

</div>
