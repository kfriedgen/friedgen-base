<?php
/**
 * Template Name: Featured Project Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
    
    <div class="featured-project__title">
        <?php get_template_part('templates/page', 'header'); ?>
    </div>
  
    <div class="featured-project__content">
        <?php get_template_part('templates/content', 'page'); ?>
    </div>

<?php endwhile; ?>
