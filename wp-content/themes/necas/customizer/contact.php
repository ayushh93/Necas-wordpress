<?php 
    function necas_contact_customizer_section($wp_customize)
    {
        //for email ----------------------------------------
        //adding setting
        $wp_customize->add_setting('necas_email_handle', array(
            'default' => ''
        ));
        //adding section
        $wp_customize->add_section('necas_header_section', array(
            'title' => __('Top Header', 'necas'),
          ));
        //adding control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'necas_email_text', array(
            'label' => __('Email Address', 'necas'),
            'section' => 'necas_header_section',
            'settings' => 'necas_email_handle',
            'description' => __('Enter Email Number', 'necas'),
            'type' => 'text'
         )));

         //for contact number
          //adding setting
        $wp_customize->add_setting('necas_phone_handle', array(
            'default' => ''
        ));

        //adding control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'necas_phone_text', array(
            'label' => __('Phone Number', 'necas'),
            'section' => 'necas_header_section',
            'settings' => 'necas_phone_handle',
            'description' => __('Enter phone number', 'necas'),
            'type' => 'text'
         )));

           //for mobile number
          //adding setting
        $wp_customize->add_setting('necas_mobile_handle', array(
            'default' => ''
        ));
      
        //adding control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'necas_mobile_text', array(
            'label' => __('Mobile Number', 'necas'),
            'section' => 'necas_header_section',
            'settings' => 'necas_mobile_handle',
            'description' => __('Enter mobile number', 'necas'),
            'type' => 'text'
         )));

          //social media settings
          //facebook
          //adding setting
        $wp_customize->add_setting('necas_facebook_handle', array(
            'default' => ''
        ));
        //adding section
        $wp_customize->add_section('necas_social_section', array(
            'title' => __('Social media settings', 'necas'),
          ));
        //adding control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'necas_facebook_text', array(
            'label' => __('Facebook', 'necas'),
            'section' => 'necas_social_section',
            'settings' => 'necas_facebook_handle',
            'description' => __('Enter Facebook URL', 'necas'),
            'type' => 'URL'
         )));

         //instagram
          //adding setting
         $wp_customize->add_setting('necas_instagram_handle', array(
            'default' => ''
        ));
        //adding control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'necas_instagram_text', array(
            'label' => __('instagram', 'necas'),
            'section' => 'necas_social_section',
            'settings' => 'necas_instagram_handle',
            'description' => __('Enter instagram URL', 'necas'),
            'type' => 'URL'
         )));

             //twitter
          //adding setting
         $wp_customize->add_setting('necas_twitter_handle', array(
            'default' => ''
        ));
        //adding control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'necas_twitter_text', array(
            'label' => __('twitter', 'necas'),
            'section' => 'necas_social_section',
            'settings' => 'necas_twitter_handle',
            'description' => __('Enter twitter URL', 'necas'),
            'type' => 'URL'
         )));

          //linkedin
          //adding setting
          $wp_customize->add_setting('necas_linkedin_handle', array(
            'default' => ''
        ));
        //adding control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'necas_linkedin_text', array(
            'label' => __('linkedin', 'necas'),
            'section' => 'necas_social_section',
            'settings' => 'necas_linkedin_handle',
            'description' => __('Enter linkedin URL', 'necas'),
            'type' => 'URL'
         )));
         
          //Footer settings
          //address
          //adding setting
        $wp_customize->add_setting('necas_address_handle', array(
            'default' => ''
        ));
        //adding section
        $wp_customize->add_section('necas_footer_section', array(
            'title' => __('Footer settings', 'necas'),
          ));
        //adding control
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'necas_address_text', array(
            'label' => __('address', 'necas'),
            'section' => 'necas_footer_section',
            'settings' => 'necas_address_handle',
            'description' => __('Enter address ', 'necas'),
            'type' => 'text'
         )));
   


    }
?>