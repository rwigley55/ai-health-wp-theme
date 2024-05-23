<?php

// Load CSS & JS files
function ai_health_files()
{
    wp_enqueue_script("navbar-dropdown", get_theme_file_uri("dropdown.js"), NULL, "1.0", true);
    wp_enqueue_script("font-awesome", "https://kit.fontawesome.com/25e9a024ec.js", NULL, "6.5.2", true);
    // wp_enqueue_style("custom-google-fonts", get_theme_file_uri("//fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap"));
    wp_enqueue_style("health_main_styles", get_theme_file_uri("/css/index.css"));
}

add_action("wp_enqueue_scripts", "ai_health_files");

function theme_features()
{
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
}

add_action("after_setup_theme", "theme_features");
