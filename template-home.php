<?php
/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>

    <?php get_template_part('templates/head'); ?>
    
    <?php get_template_part('templates/home/recent-post'); ?>

    <?php get_template_part('templates/home/secondary-recent-posts'); ?>

    <div class="featured-content__outer">
    
        <?php get_template_part('templates/home/featured-content'); ?>

    </div>
    
<?php endwhile; ?>
