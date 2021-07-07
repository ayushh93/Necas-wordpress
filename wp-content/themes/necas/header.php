<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
</head>
<body>

<!----------------------------
-------Header .//-------
----------------------------->

<header class="top-header bg-primary color-white">
    <div class="container"> <!-- Container .// -->
        <div class="row"> <!-- Row .// -->
            <div class="col-md-6"> <!-- Col .// -->
                <!-- <ul class="list-unstyled header-contact">
                    <li><i class="fas fa-phone"></i> <a href="tel: 9843440422">9843440422</a><a href="tel: 9808236689">9808236689</a></li>
                    <li><i class="fas fa-envelope"></i> <a href="tel: info@somedomain.com">info@somedomain.com</a></li>
                </ul> -->

                <ul class="list-unstyled side-listing small-menu first-menu">

                <?php if(get_theme_mod('necas_email_handle')){?>
                    <li><a href="mailto: <?php echo get_theme_mod('necas_email_handle')?>"><i class="fas fa-envelope"></i><?php echo get_theme_mod('necas_email_handle')?></a></li>
                    <?php } ?>

                <?php if(get_theme_mod('necas_phone_handle')){?>
                    <li><a href="tel: <?php echo get_theme_mod('necas_phone_handle')?>"><i class="fas fa-phone"></i><?php echo get_theme_mod('necas_phone_handle')?></a></li>
                    <?php } ?>

                <?php if(get_theme_mod('necas_mobile_handle')){?>
                    <li><a href="tel: <?php echo get_theme_mod('necas_mobile_handle')?>"><i class="fas fa-phone"></i> <?php echo get_theme_mod('necas_mobile_handle')?></a></li>
                    <?php } ?>

                </ul>
            </div> <!-- Col .// -->
            <div class="col-md-6"> <!-- Col .// -->
                <div class="clearfix">
                    <div class="top-header-right float-right">
                        <!-- <ul class="list-unstyled social-icons">
                            <li><a href="javascript:" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="javascript:" class="twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="javascript:" class="google"><i class="fab fa-google"></i></a></li>
                            <li><a href="javascript:" class="youtube"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="javascript:" class="instagram"><i class="fab fa-instagram"></i></a></li>
                        </ul> -->

                        <ul class="list-unstyled side-listing small-menu second-menu ">
                <?php if(get_theme_mod('necas_facebook_handle')){?>
                            <li><a href="<?php echo get_theme_mod('necas_facebook_handle')?>"><i class="fab fa-facebook-f"></i></a></li>
                    <?php } ?>


                <?php if(get_theme_mod('necas_instagram_handle')){?>
                            <li><a href="<?php echo get_theme_mod('necas_instagram_handle')?>"><i class="fab fa-twitter"></i></a></li>
                    <?php } ?>


                <?php if(get_theme_mod('necas_twitter_handle')){?>
                            <li><a href="<?php echo get_theme_mod('necas_twitter_handle')?>"><i class="fab fa-instagram"></i></a></li>
                    <?php } ?>


                <?php if(get_theme_mod('necas_linkedin_handle')){?>
                            <li><a href="<?php echo get_theme_mod('necas_linkedin_handle')?>"><i class="fab fa-linkedin-in"></i></a></li>
                    <?php } ?>

                            <li><a href="user-dashboard.php"><i class="fas fa-user"></i> Rohan Yogi</a></li>
                            <li><a href="register.php"><i class="fas fa-user"></i> Sign Up</a></li>
                            <li><a href="login.php"><i class="fas fa-lock"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
            </div> <!-- Col .// -->
        </div> <!-- Row .// -->
    </div> <!-- Container .// -->
</header>

<header class="main-header sticky-top">
    <div class="container"> <!-- Container .// -->
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="<?php echo home_url('/') ; ?>">
                <?php 
                    if (has_custom_logo() || is_customize_preview())
                    {
                        the_custom_logo();
                    }
                    else
                    {
                        ?>
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/logo.png' ?>" alt="LOGO">
                    <?php } ?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo home_url('/') ; ?>">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:" id="navbarDropdownMenuLink1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1"> <!-- Dropdown .// -->
                            <a class="dropdown-item" href="<?php echo site_url('/Overview'); ?>">Overview</a>
                            <a class="dropdown-item" href="<?php echo site_url('/message-from-chairman'); ?>">Message from Chairman</a>
                            <a class="dropdown-item" href="<?php echo site_url('/message-from-md'); ?>">Message from MD</a>
                            <a class="dropdown-item" href="<?php echo site_url('/our-team'); ?>">Our Team</a>
                        </div> <!-- Dropdown .// -->
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:" id="navbarDropdownMenuLink2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Study Abroad</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2"> <!-- Dropdown .// -->
                        <?php
                         $args=array(
                        'post_type'=> 'studys',
                        'post_per_page' => -1,
                        'orderby' => 'title',
                        'order' => 'ASC'
                        );
                         $study=new WP_Query($args);
                        while($study->have_posts()) : $study->the_post();
            
                        ?>
                            <a class="dropdown-item" href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a>
                            <?php endwhile; wp_reset_postdata(); ?>
                           
                        </div> <!-- Dropdown .// -->
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:" id="navbarDropdownMenuLink3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Test Preparation</a>
                       

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3"> <!-- Dropdown .// -->
                        <?php
                         $args=array(
                        'post_type'=> 'tests',
                        'post_per_page' => -1,
                        'orderby' => 'title',
                        'order' => 'ASC'
                        );
                         $tests=new WP_Query($args);
                        while($tests->have_posts()) : $tests->the_post();
            
                        ?>
                            <a class="dropdown-item" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            
                            <?php endwhile; wp_reset_postdata(); ?>

                        </div> <!-- Dropdown .// -->
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:" id="navbarDropdownMenuLink4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Services</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink4"> <!-- Dropdown .// -->
                        <?php
                         $args=array(
                        'post_type'=> 'services',
                        'post_per_page' => -1,
                        'orderby' => 'title',
                        'order' => 'ASC'
                        );
                         $services=new WP_Query($args);
                        while($services->have_posts()) : $services->the_post();
            
                        ?>
                            <a class="dropdown-item" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <?php endwhile; wp_reset_postdata(); ?>
                            
                        </div> <!-- Dropdown .// -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('/blog')?>">Blog page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('/contact-us')?>">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div> <!-- Container .// -->
</header>

<!----------------------------
-------Header .//-------
----------------------------->

<!----------------------
---------PreLoader---------
----------------------->

<div id="preloader">
    <img src="<?php echo get_template_directory_uri(). '/assets/img/preloader.gif' ;?>" class="img-fluid" alt="LOADER">
</div>

<!----------------------
---------PreLoader---------
----------------------->