<?php
/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>

    <?php get_template_part('templates/head'); ?>

    <?php get_template_part('templates/recent-post'); ?>
    
<?php endwhile; ?>
