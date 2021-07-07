<!----------------------------
-------Footer .//-------
----------------------------->

<div class="newsletter-wrapper">
    <div class="container"> <!-- Container .// -->

        <h1 class="section-title text-uppercase text-center">
            Newsletter
        </h1>

        <div class='newsletter'>
            <form>
                <input placeholder='Please Enter Your Email Address...' type='text'>
                <button>subscribe!</button>
            </form>
        </div>
    </div> <!-- Container .// -->
</div> <!-- Footer-Silhouette .// -->

<footer class="footer-main bg-primary color-white">
    <div class="container"> <!-- Container .// -->

        <div class="footer-logo text-center">
            <a href="<?php echo home_url('/') ; ?>">
                <img data-src="<?php echo get_template_directory_uri() . '/assets/img/footer-logo.png'?>" alt="LOGO" class="lazyload">
            </a>
        </div>

        <div class="row"> <!-- Row .// -->
            <div class="col-lg-4 col-md-6 col-12"> <!-- Col .// -->
                <div class="footer-wrap text-center">
                    <h4 class="footer-title">Call Us</h4>
                    <ul class="list-unstyled">
                    <?php if(get_theme_mod('necas_phone_handle')){?>
                    <li><a href="tel: <?php echo get_theme_mod('necas_phone_handle')?>"><i class="fas fa-phone"></i><?php echo get_theme_mod('necas_phone_handle')?></a></li>
                    <?php } ?>

                <?php if(get_theme_mod('necas_mobile_handle')){?>
                    <li><a href="tel: <?php echo get_theme_mod('necas_mobile_handle')?>"><i class="fas fa-phone"></i> <?php echo get_theme_mod('necas_mobile_handle')?></a></li>
                    <?php } ?>
                    </ul>
                </div>
            </div> <!-- Col .// -->
            <div class="col-lg-4 col-md-6 col-12"> <!-- Col .// -->
                <div class="footer-wrap text-center">
                    <h4 class="footer-title">Address</h4>
                    <p><?php echo get_theme_mod('necas_address_handle')?></p>

                    <ul class="list-unstyled social-icons">
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
                    </ul>
                </div>
            </div> <!-- Col .// -->
            <div class="col-lg-4 col-md-6 col-12"> <!-- Col .// -->
                <div class="footer-wrap text-center">
                    <h4 class="footer-title">Email</h4>
                    <ul class="list-unstyled">
                    <?php if(get_theme_mod('necas_email_handle')){?>
                    <li><a href="mailto: <?php echo get_theme_mod('necas_email_handle')?>"><i class="fas fa-envelope"></i><?php echo get_theme_mod('necas_email_handle')?></a></li>
                    <?php } ?>
                    </ul>
                </div>
            </div> <!-- Col .// -->
        </div> <!-- Row .// -->

        <div class="copyright-main text-center">
            <ul class="footer-mini-nav list-unstyled text-center">
                <li>
                    <a href="<?php echo site_url('/faq'); ?>">FAQs</a>
                </li>
                <li>
                    <a href="javascript:">Blog</a>
                </li>
            </ul>
            <p>&copy;<script>document.write(new Date().getFullYear());</script> NAAT Educational Consultancy Pvt. Ltd. All Rights Reserved</p>
            <p>Designed & Developed by <a href="https://www.facebook.com/TechXNepal" target="_blank">TechXNepal</a></p>
        </div>
    </div> <!-- Container .// -->
</footer>

<!----------------------------
-------Footer .//-------
----------------------------->

<!----------------------------
-------Scripts .//-------
----------------------------->

<!-- Main .// -->
<?php wp_footer(); ?>
<!----------------------------
-------Scripts .//-------
----------------------------->
</body>
</html>