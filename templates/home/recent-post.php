<!-- featured-post Post Begins -->
<?php
    $args = array( 'posts_per_page' => 1, 'tag' => 'featured' );
    $postslist = get_posts( $args );
    foreach ( $postslist as $post ) :
      setup_postdata( $post ); ?> 
    
    <div class="featured-post">

        <div class="featured-post__inner">

            <div class="featured-post__photo-outer">

                <a href="<?php the_permalink(); ?>" class="featured-post__photo">
                    <?php the_post_thumbnail('large'); ?>    
                </a>

            </div>
        </div>

        <div class="featured-post__inner">

            <h3 class="featured-post__title">
                <?php the_title(); ?>    
            </h3>

            <div class="featured-post__excerpt">
                <?php the_excerpt(); ?>
            </div>

            <p>
                <a href="<?php the_permalink(); ?>" class="featured-post__read-more">Read Full Post</a>
            </p>

        </div>

    </div>
    
<?php
endforeach; 
wp_reset_postdata();
?>
<!-- Featured Post Ends -->