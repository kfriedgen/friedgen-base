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

function introduction() {

    register_sidebar( array(
        'name'          => 'Introduction',
        'id'            => 'introduction',
        'before_widget' => '<div class="introduction">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="introduction__title">',
        'after_title'   => '</h4>',
    ) );

}
add_action( 'widgets_init', 'introduction' );

function design_feature() {

    register_sidebar( array(
        'name'          => 'Design Projects',
        'id'            => 'design-feature',
        'before_widget' => '<div class="design_feature">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="design__title">',
        'after_title'   => '</h4>',
    ) );

}
add_action( 'widgets_init', 'design_feature' );

function photography_feature() {

    register_sidebar( array(
        'name'          => 'Photography Projects',
        'id'            => 'photography-feature',
        'before_widget' => '<div class="photography_feature">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="photography__title">',
        'after_title'   => '</h4>',
    ) );

}
add_action( 'widgets_init', 'photography_feature' );

function about_sidebar() {

    register_sidebar( array(
        'name'          => 'About Sidebar',
        'id'            => 'about-sidebar',
        'before_widget' => '<div class="about__sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="about-sidebar__title">',
        'after_title'   => '</h4>',
    ) );

}
add_action( 'widgets_init', 'about_sidebar' );
?>