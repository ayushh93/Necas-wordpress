<?php 
    include (get_template_directory() . '/front/enqueue.php') ;
    include (get_template_directory() . '/front/setup.php') ;
    include (get_template_directory() . '/customizer/theme-customizer.php') ;
    include (get_template_directory() . '/customizer/contact.php') ;
    add_action('customize_register', 'necas_customizer_register');






        function necas_widgets()
        {
            register_sidebar(array(
                'name'=>'blog_sidebar',
                'id'=> 'blog_sidebar',
                'before_widget' => '<div class="widget>',
                'after_widget' => '</div>',
                'before_title' => '<h3>',
                'after_title' => ' </h3>'
            )
            );
        }
        add_action('widgets_init','necas_widgets');
?>