<a href="<?php the_permalink(); ?>" class="blogroll__single">
    
    <article <?php post_class(); ?>>
        
        <div class="blogroll__date-outer">
            <h6 class="blogroll__date">
                <?php the_time(get_option('date_format')); ?>
            </h6>
        </div>

        <div class="blogroll__feature-outer">
            
            <div class="blogroll__feature-image">
                <?php the_post_thumbnail("full");  ?>
            </div>
            
            <div class="blogroll__information">
                <span class="blogroll__title-outer">
                    <h3 class="blogroll__title">
                        <?php the_title(); ?>
                    </h3>
                </span>
                <span class="blogroll__category">
                    <?php
                    $category = get_the_category(); 
                    echo $category[0]->cat_name;
                    ?>
                </span> 
            </div>

        </div>

    </article>

</a>
