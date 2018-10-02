<div class="recent-posts__outer">
    
    <h3 class="recent-posts__title">Recent Writings</h5>
    
    <div class="recent-posts">
        <?php
            $args = array( 'numberposts' => '3' );
            $postslist = get_posts( $args );
            foreach ( $postslist as $post ) :
              setup_postdata( $post ); ?> 
            
            <div class="recent-posts__inner">

                <?php if (has_post_thumbnail( $post->ID ) ): ?>
                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                    <?php else :
                    $image = get_bloginfo( 'stylesheet_directory') . '/images/default_cat_img.jpg'; ?>
                <?php endif; ?>
                
                <a class="recent-posts__image-link" href="<?php the_permalink(); ?>">
                    <?php echo the_post_thumbnail();  ?>
                </a>

                <div class="recent-posts__info">
                            
                    <h5>
                        <a class="recent-posts__link" href="<?php the_permalink(); ?>">
                            <?php the_title(); ?> 
                        </a>
                    </h5>

                    <span class="recent-posts__date">
                        <?php the_date('m.d.Y'); ?> 
                    </span>

                </div>

            </div>
            
        <?php
        endforeach; 
        wp_reset_postdata();
        ?>

    </div>

</div>