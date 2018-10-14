<?php
function islandSite_resources() { 
    wp_enqueue_style('style', get_stylesheet_uri()); 
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/custom.js');
  
}
add_action('wp_enqueue_scripts', 'islandSite_resources');

