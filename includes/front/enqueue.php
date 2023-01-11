<?php

// How to Register Styles in the WordPress
function u_enqueue(): void
{
    wp_register_style(
        'u_font_rubik',
        'https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap',
        [],
        '1.0',
        null
    );
    wp_register_style(
        'u_font_pacifico',
        'https://fonts.googleapis.com/css2?family=Pacifico&display=swap',
        [],
        '1.0',
        null
    );


    wp_register_style(
        'u_bootstrap_icons',
        get_theme_file_uri('assets/bootstrap-icons/bootstrap-icons.css')
    );

    wp_register_style(
        'u_theme',
        get_theme_file_uri('assets/public/index.css'),
    );


    wp_enqueue_style('u_font_rubik');
    wp_enqueue_style('u_font_pacifico');
    wp_enqueue_style('u_bootstrap_icons');
    wp_enqueue_style('u_theme');

}