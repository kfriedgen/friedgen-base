<header class="banner header">

    <div class="container header__outer">

      <div class="header">

        <div class="header__inner header__logo-outer u-medium--hide">

            <a class="header__logo logo__a" href="<?= esc_url(home_url('/')); ?>">
                <?php bloginfo('name'); ?>
            </a>

        </div>

        <div class="header__inner header__navigation-outer">

            <nav class="nav-primary header__navigation">
                <?php
                if (has_nav_menu('primary_navigation')) :
                  wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
                endif;
                ?>
            </nav>

        </div>

        <div class="header__inner header__logo-outer u-medium--show">

            <a class="header__logo logo__a" href="<?= esc_url(home_url('/')); ?>">
                <span>
                    <span>
                        <span><?php bloginfo('name'); ?></span>
                    </span>
                </span>
            </a>

        </div>

        <div class="header__inner header__search-outer">

            <div class="header__search">
                <?php get_search_form(); ?>
            </div>

        </div>

      </div>

    </div>

</header>
