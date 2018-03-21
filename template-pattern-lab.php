<?php
/**
 * Template Name: Pattern Lab
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

  <div class="pattern-lab">

      <div class="pattern-lab__section">      
          <h4 class="pattern-lab__title">Colors:</h4>
          <?php get_template_part('templates/pattern-lab/colors'); ?>
      </div>

      <div class="pattern-lab__section"> 
          <h4 class="pattern-lab__title">Fonts:</h4>
          <?php get_template_part('templates/pattern-lab/fonts'); ?>
      </div>

      <div class="pattern-lab__section"> 
          <h4 class="pattern-lab__title">Headings:</h4>
          <?php get_template_part('templates/pattern-lab/headings'); ?>
      </div>

      <div class="pattern-lab__section"> 
          <h4 class="pattern-lab__title">Copy:</h4>
          <?php get_template_part('templates/pattern-lab/copy'); ?>
      </div>

      <div class="pattern-lab__section"> 
          <h4 class="pattern-lab__title">Buttons:</h4>
          <?php get_template_part('templates/pattern-lab/buttons'); ?>
      </div>

      <div class="pattern-lab__section"> 
          <h4 class="pattern-lab__title">Forms:</h4>
          <?php get_template_part('templates/pattern-lab/forms'); ?>
      </div>

      <div class="pattern-lab__section"> 
          <h4 class="pattern-lab__title">Photographs:</h4>
          <?php get_template_part('templates/pattern-lab/photos'); ?>
      </div>

  </div>

<?php endwhile; ?>
