<!-- featured-post Post Begins -->
<?php
    $args = array( 'posts_per_page' => 1 );
    $postslist = get_posts( $args );
    foreach ( $postslist as $post ) :
      setup_postdata( $post ); ?> 
    
    <div class="featured-post-post">

        <?php if (has_post_thumbnail( $post->ID ) ): ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            <?php else :
            $image = get_bloginfo( 'stylesheet_directory') . '/images/default_cat_img.jpg'; ?>
        <?php endif; ?>

        <a class="featured-post__image--link" href="<?php the_permalink(); ?>">

            <div class="featured-post__image" style="background-image: url('<?php echo $image[0]; ?>');">
                

                <a class="featured-post__a" href="<?php the_permalink(); ?>">

                    <div class="featured-post__inner">
            
                        <h1 class="featured-post__title">
                            <?php the_title(); ?>    
                        </h1>

                        <span class="featured-post__read-more button__primary">
                            Read Full Post
                        </span>

                    </div>

                </a>


            </div>

        </a>

    </div>
    
<?php
endforeach; 
wp_reset_postdata();
?>
<!-- Featured Post Ends -->