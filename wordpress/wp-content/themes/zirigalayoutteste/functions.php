<?php
function my_theme_scripts_function() {
    wp_enqueue_script( 'myscript', get_template_directory_uri() . '/js/main.js');
   
  }
  add_action('wp_enqueue_scripts','my_theme_scripts_function');