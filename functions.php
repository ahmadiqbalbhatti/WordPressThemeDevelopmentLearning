<?php


// Variables

// Includes
include(get_theme_file_path('/includes/front/enqueue.php'));
// Hooks
/*
 * call back requires a function that returns scripts and style.
 * So using prefix in the function name ensures that the callback function doesn't exist before.
*/
add_action('wp_enqueue_scripts', 'u_enqueue');