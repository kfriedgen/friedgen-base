<div class="blog-post__outer">
    <?php while (have_posts()) : the_post(); ?>

        <div class="blog-post">
            
            <article <?php post_class(); ?>>

                <div class="blog-post__main-outer">
                
                    <header class="blog-post__header">
                        <?php get_template_part('templates/entry-meta'); ?>
                    </header>

                    <div class="blog-post__main">

                        <div class="blog-post__feature-image">
                            <?php the_post_thumbnail('full'); ?> 
                        </div>

                        <div class="blog-post__inner">

                            <div class="entry-content blog-post__content-outer">

                                <h1 class="entry-title blog-post__title"><?php the_title(); ?></h1>

                                <div class="blog-post__content">
                                    <?php the_content(); ?>
                                </div>

                            </div>

                            <div class="blog-post__sidebar sidebar">
                                <?php dynamic_sidebar('sidebar-primary'); ?>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="blog-post__pagination">
                    
                    <div class="blog-post__pagination-previous">
                        <p class="blog-post__pagination-link">Previous Post</p>
                        <?php previous_post_link(); ?>
                    </div>

                    <div class="blog-post__pagination-next">
                        <p class="blog-post__pagination-link">Next Post</p>
                        <?php next_post_link(); ?>
                    </div>
                </div>

                <div class="blog-post__comments">
                    <?php comments_template('/templates/comments.php'); ?>
                </div>

            </article>

        </div>

    <?php endwhile; ?>
</div>
