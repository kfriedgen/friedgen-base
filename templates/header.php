<header class="banner header">

    <div class="container header__container">

      <div class="header__top">

          <a class="header__logo logo__a" href="<?= esc_url(home_url('/')); ?>">
              <?php bloginfo('name'); ?>
          </a>

          <nav class="nav-primary header__navigation">
              <?php
              if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
              endif;
              ?>
          </nav>

          <div class="header__search">
              <?php get_search_form(); ?>
          </div>

      </div>


    </div>

</header>
