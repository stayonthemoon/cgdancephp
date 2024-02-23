<?php

function cgdance_files() {
  wp_enqueue_style('font_preconnect', '//fonts.googleapis.com');
  wp_enqueue_style('font_preconnect_cross', '//fonts.gstatic.com');
  wp_enqueue_style('font_anton', '//fonts.googleapis.com/css2?family=Anton&display=swap');
  wp_enqueue_style('font_roboto', '//fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swapt');
  wp_enqueue_style('cgdance_main_styles', get_theme_file_uri('/css/index.css'));
}

add_action('wp_enqueue_scripts', 'cgdance_files');
