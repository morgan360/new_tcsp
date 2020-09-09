<?php
/*
 *
 * Main Functions File
 * Wednesday 9 September 2020 at 10:49:29
 */

add_action('wp_enqueue_scripts', 'enqueue_parent_styles');
function enqueue_parent_styles() {
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}