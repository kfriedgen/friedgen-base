<?php
/**
 * Template Name: About Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
    
    <div class="about__header">
        <?php get_template_part('templates/page', 'header'); ?>
    </div>

    <div class="about__content">
        
        <div class="about__inner">
            <div class="about__feature-image">
                <?php the_post_thumbnail('full'); ?>
            </div>
        </div>
      
        <div class="about__inner">
            <?php get_template_part('templates/content', 'page'); ?>
        </div>
    </div>

    <div class="about__sidebar-outer">
        <?php dynamic_sidebar( 'about-sidebar' ); ?>
    </div>

<?php endwhile; ?>
