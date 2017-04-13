<?php
/**
 * Template Name: Pattern Lab
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

  <div class="pattern-lab">

      <h4 class="pattern-lab__title">Colors:</h4>
      <?php get_template_part('templates/pattern-lab/colors'); ?>

      <h4 class="pattern-lab__title">Fonts:</h4>
      <?php get_template_part('templates/pattern-lab/fonts'); ?>

      <h4 class="pattern-lab__title">Headings:</h4>
      <?php get_template_part('templates/pattern-lab/headings'); ?>

      <h4 class="pattern-lab__title">Copy:</h4>
      <?php get_template_part('templates/pattern-lab/copy'); ?>

      <h4 class="pattern-lab__title">Photographs:</h4>
      <?php get_template_part('templates/pattern-lab/photos'); ?>

  </div>

<?php endwhile; ?>
