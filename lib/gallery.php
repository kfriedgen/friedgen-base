<?php
/**
 * Creating a masonry grid structure
 *
 */
function mytheme_gallery_defaults ( $settings ) {
    $settings['galleryDefaults']['link'] = 'file'; // Change this to 'none' to disable links on images
    $settings['galleryDefaults']['columns'] = '5'; // Change this value to set the number of columns
    return $settings;
}
add_filter ( 'media_view_settings', 'mytheme_gallery_defaults' );
?>