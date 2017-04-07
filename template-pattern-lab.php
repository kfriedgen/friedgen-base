<?php
/**
 * Template Name: Pattern Lab
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

  <h3>Colors Styles:</h3>
  <?php get_template_part('templates/pattern-lab/colors', 'page'); ?>

  <h3>Heading Styles:</h3>
  <?php get_template_part('templates/pattern-lab/headings', 'page'); ?>

  <h3>Body Copy Styles:</h3>
  <?php get_template_part('templates/pattern-lab/copy', 'page'); ?>
<?php endwhile; ?>
