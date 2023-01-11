<?php

function u_setup_theme(): void
{
    // use to enable the styles for guttenburge editor
    add_theme_support('editor-styles');

    // it uses to load the styles in the guttenburge editor
    add_editor_style([
        'https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap',
        'https://fonts.googleapis.com/css2?family=Pacifico&display=swap',
        'assets/bootstrap-icons/bootstrap-icons.css',
        'assets/public/index.css',
    ]);



}