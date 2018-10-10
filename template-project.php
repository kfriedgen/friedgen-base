<?php
/**
 * Template Name: Project Template
 */
?>
<div class="project__outer">

    <?php while (have_posts()) : the_post(); ?>
    <div class="project">

        <div class="project__header-outer">
            <div class="project__feature-image">
                <div class="project__header">
                    <?php get_template_part('templates/page', 'header'); ?>
                </div>
                <div class="project__feature-image-inner">
                    <?php the_post_thumbnail('full'); ?> 
                </div>
            </div>
        </div>

        <div class="project__main">
            <?php get_template_part('templates/content', 'page'); ?>
        </div>
    </div>
    <?php endwhile; ?>

</div>
