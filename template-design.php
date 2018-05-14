<?php
/**
 * Template Name: Design Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
    
    <div class="page__title">
        <?php get_template_part('templates/page', 'header'); ?>
    </div>
  
    <div class="page__content">
        <?php get_template_part('templates/content', 'page'); ?>
    </div>

    <div class="page__feature">
        <?php dynamic_sidebar( 'design-feature' ); ?>
    </div>

<?php endwhile; ?>
