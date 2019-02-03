<?php
/**
 * Template Name: Case Study Template
 */
?>

<div class="case-study__outer">
    <?php while (have_posts()) : the_post(); ?>

        <div class="case-study">
            
            <article <?php post_class(); ?>>

                <div class="case-study__main-outer">
                
                    <header class="case-study__header">
                        <?php dynamic_sidebar('widget-team'); ?>
                    </header>

                    <div class="case-study__main">

                        <div class="case-study__feature-image">
                            <?php the_post_thumbnail('full'); ?> 
                        </div>

                        <div class="case-study__inner">

                            <div class="entry-content case-study__content-outer">

                                <h1 class="entry-title case-study__title"><?php the_title(); ?></h1>

                                <div class="case-study__content">
                                    <?php the_content(); ?>
                                </div>

                            </div>

                            <div class="case-study__sidebar sidebar">
                                <?php dynamic_sidebar('widget-case-study-nav'); ?>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="case-study__footer">
                
                </div>

            </article>

        </div>

    <?php endwhile; ?>
</div>
