<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */

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


function about_sidebar() {

    register_sidebar( array(
        'name'          => 'About Sidebar',
        'id'            => 'about-sidebar',
        'before_widget' => '<div class="about__sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="about__sidebar-title">',
        'after_title'   => '</h4>',
    ) );

}
add_action( 'widgets_init', 'about_sidebar' );

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

function widget_team() {

    register_sidebar( array(
        'name'          => 'Team',
        'id'            => 'widget-team',
        'before_widget' => '<div class="widget__team">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget__team-title">',
        'after_title'   => '</h4>',
    ) );

}
add_action( 'widgets_init', 'widget_team' );

function widget_cs_nav() {

    register_sidebar( array(
        'name'          => 'Case Study Navigation',
        'id'            => 'widget-case-study-nav',
        'before_widget' => '<div class="widget__case-study-nav">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="widget__case-study-nav-title">',
        'after_title'   => '</h5>',
    ) );

}
add_action( 'widgets_init', 'widget_cs_nav' );

?>