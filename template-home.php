<?php
/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>

    <?php get_template_part('templates/head'); ?>

    <div class="homepage">

        <div class="homepage__inner">
        
            <div class="homepage__introduction">
                <?php get_template_part('templates/home/introduction'); ?>
            </div>

        </div>

        <div class="homepage__featured">

            <div class="homepage__featured-inner">
                <?php get_template_part('templates/home/featured-content'); ?>
            </div>

        </div>

        <div class="homepage__secondary">
            
            <div class="homepage__secondary-inner">
                <?php get_template_part('templates/home/recent-post'); ?>
            </div>

        </div>

    </div>
    
<?php endwhile; ?>
