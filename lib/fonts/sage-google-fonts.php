<?php
/**
 * Manage google fonts of load_google_font()
 * This is specifically for the theme Sage from roots.io and goes in extras.php
 * set GOOGLE_FONTS constant in config.php
 */
function load_google_fonts() {
  if( ! defined( 'GOOGLE_FONTS' ) ) return;
  echo '<link href="https://fonts.googleapis.com/css?family=' . GOOGLE_FONTS . '" rel="stylesheet" type="text/css" />'."\n";
}
add_action( 'wp_head', __NAMESPACE__ . '\\load_google_fonts' , 1);