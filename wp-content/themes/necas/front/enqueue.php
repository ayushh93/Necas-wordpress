<?php 
    function necas_styles()
    {
        //register css
        wp_register_style('bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
        wp_register_style('fontawesome_css', get_template_directory_uri() . '/assets/include/font-awesome/css/all.css');
        wp_register_style('normalize_css', get_template_directory_uri() . '/assets/css/normalize.css');
        wp_register_style('owl_css', get_template_directory_uri() . '/assets/css/owl-carousel.min.css');
        wp_register_style('owl2_css', get_template_directory_uri() . '/assets/css/owl-carousel.min.css');
        wp_register_style('main_css', get_template_directory_uri() . '/assets/css/main.css');
         //enqueue css
        wp_enqueue_style('bootstrap_css');
        wp_enqueue_style('fontawesome_css');
        wp_enqueue_style('normalize_css');
        wp_enqueue_style('owl_css');
        wp_enqueue_style('owl2_css');
        wp_enqueue_style('main_css');

        //register js
        wp_register_script('bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.jss',array('jquery'), false, false);
        wp_register_script('bundle_js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js',array('jquery'), false, false);
        wp_register_script('owl_js', get_template_directory_uri() . '/assets/js/owl-carousel.min.js',array('jquery'), false, false);
        wp_register_script('lazysizes_js', get_template_directory_uri() . '/assets/js/lazysizes.min.js',array('jquery'), false, false);
        wp_register_script('matchheight_js', get_template_directory_uri() . '/assets/js/jquery.matchHeight-min.js',array('jquery'), false, false);
        wp_register_script('datatable_js', get_template_directory_uri() . '/assets/js/data-table.min.js',array('jquery'), false, false);
        wp_register_script('main_js', get_template_directory_uri() . '/assets/js/main.js',array('jquery'), false, false);


        //enqueue js
        wp_enqueue_script('jQuery');
        wp_enqueue_script('bootstrap_js');
        wp_enqueue_script('bundle_js');
        wp_enqueue_script('owl_js');
        wp_enqueue_script('lazysizes_js');
        wp_enqueue_script('matchheight_js');
        wp_enqueue_script('datatable_js');
        wp_enqueue_script('main_js');



    }
    add_action('wp_enqueue_scripts', 'necas_styles');
?>
