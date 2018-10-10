<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <?php get_template_part('templates/no-results'); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'search'); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>
