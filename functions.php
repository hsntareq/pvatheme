<?php

/**
 * Proper way to enqueue scripts and styles.
 */
function wpdocs_theme_name_scripts() {
    wp_enqueue_style('pva-style', get_stylesheet_uri());
    wp_enqueue_style('pva-bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_script('pva-script', get_template_directory_uri() . '/js/sitescript.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'wpdocs_theme_name_scripts');

define('THEME_DIR', get_template_directory_uri());


/* Better way to add multiple widgets areas */
function widget_registration($name, $id, $description, $beforeWidget, $afterWidget, $beforeTitle, $afterTitle) {
    register_sidebar(
        array(
            'name' => $name,
            'id' => $id,
            'description' => $description,
            'before_widget' => $beforeWidget,
            'after_widget' => $afterWidget,
            'before_title' => $beforeTitle,
            'after_title' => $afterTitle,
        )
    );
}

function multiple_widget_init() {
    widget_registration('Footer Before 1', 'footer-before-1', 'test', '', '', '', '');
    widget_registration('Footer Before 2', 'footer-before-2', 'test', '', '', '', '');
    widget_registration('Footer Before 3', 'footer-before-3', 'test', '', '', '', '');
    widget_registration('Footer widget 1', 'footer-sidebar-1', 'test', '', '', '', '');
    widget_registration('Footer widget 2', 'footer-sidebar-2', 'test', '', '', '', '');
    widget_registration('Footer widget 3', 'footer-sidebar-3', 'test', '', '', '', '');
    // ETC...
}

add_action('widgets_init', 'multiple_widget_init');
