<?php
/* =========================================
 * Enqueues parent theme stylesheet
 * ========================================= */

add_action( 'wp_enqueue_scripts', 'wiguard_enqueue_child_theme_styles', 30 );
function wiguard_enqueue_child_theme_styles() {
	wp_enqueue_style( 'wiguard-child-theme-style', get_stylesheet_uri(), array(), null );
}
