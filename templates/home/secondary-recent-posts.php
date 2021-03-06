<div class="recent-posts__outer">

    <?php
        $args = array( 'numberposts' => '3', 'offset' => 1 );
        $postslist = get_posts( $args );
        foreach ( $postslist as $post ) :
          setup_postdata( $post ); ?> 
        
        <div class="recent-posts">

            <?php if (has_post_thumbnail( $post->ID ) ): ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                <?php else :
                $image = get_bloginfo( 'stylesheet_directory') . '/images/default_cat_img.jpg'; ?>
            <?php endif; ?>

            <a class="recent-posts__image--link" href="<?php the_permalink(); ?>">
                <?php echo the_post_thumbnail();  ?>
            </a>
                    
            <a class="recent-posts__link" href="<?php the_permalink(); ?>">
                <?php the_title(); ?> 
            </a>

        </div>
        
    <?php
    endforeach; 
    wp_reset_postdata();
    ?>

</div>