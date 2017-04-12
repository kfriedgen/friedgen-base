<?php
/**
 * Template Name: Pattern Lab
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

  <h3>Colors:</h3>
  <?php get_template_part('templates/pattern-lab/colors', 'page'); ?>

  <h3>Headings:</h3>
  <?php get_template_part('templates/pattern-lab/headings', 'page'); ?>

  <h3>Copy:</h3>
  <?php get_template_part('templates/pattern-lab/copy', 'page'); ?>

  <h3>Photographs:</h3>
  <?php get_template_part('templates/pattern-lab/photos', 'page'); ?>
<?php endwhile; ?>
