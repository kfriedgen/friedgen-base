<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function featured_content() {

    register_sidebar( array(
        'name'          => 'Featured Home Content',
        'id'            => 'featured-content',
        'before_widget' => '<div class="featured-content">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="featured-content__title">',
        'after_title'   => '</h4>',
    ) );

}
add_action( 'widgets_init', 'featured_content' );
?>