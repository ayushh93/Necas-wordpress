<?php 
    function necas_setup_theme()
    {
        add_theme_support('title-tag');
        add_theme_support('custom-logo');
        add_theme_support('post-thumbnails');

    }
    add_action('after_setup_theme', 'necas_setup_theme');
?>