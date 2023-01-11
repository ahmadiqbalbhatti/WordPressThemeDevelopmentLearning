<?php


// Variables

// Includes
include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/front/head.php'));
include (get_theme_file_path('/includes/front/setup.php'));
// Hooks
/*
 * call back requires a function that returns scripts and style.
 * this WP_ENQUEUE_SCRIPS is used to enqueue styles and scripts.
 * So using prefix in the function name ensures that the callback function doesn't exist before.
 * u_ is the prefix in the function to make sure that this function name is not exists in the any
 *  prebuilt WordPress function.
*/
add_action('wp_enqueue_scripts', 'u_enqueue');

// the number 5 is used to place these links higher from the Google fonts link
add_action('wp_head', 'u_head', 5);

// To load style on the block panel.
add_action('after_setup_theme', 'u_setup_theme');