<?php 
/* Template Name: Contact page */
?>

<?php get_header(); ?>
<?php
while(have_posts()): the_post();
?>


<section class="breadcrumb-main bg-img" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?php echo the_post_thumbnail_url(); ?>');">
    <div class="container"> <!-- Container .// -->
        <h4 class="page-title"><?php echo the_title(); ?></h4>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-flex justify-content-start">
                <li class="breadcrumb-item"><a href="<?php echo home_url('/'); ?>"><i class="fas fa-home"></i></a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Listing</a></li> -->
                <li class="breadcrumb-item active" aria-current="page"><?php echo the_title(); ?></li>
            </ol>
        </nav>
    </div> <!-- Container .// -->
</section>


<section class="contact-main common-padding bg-grey">
    <div class="container"> <!-- Container .// -->

        <h1 class="section-title text-uppercase text-center">
            Contact <span>Us</span>
        </h1>

        <div class="row"> <!-- Row .// -->
            <div class="col-md-4"> <!-- Col .// -->
                <div class="white-card"> <!-- Card .// -->
                    <h5 class="content-title">Head Office</h5>

                    <div class="details-wrap d-flex align-items-center"> <!-- Details-Wrap .// -->
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><a href="tel: 9808236689">+977-9808236689</a></li>
                                <li><a href="tel: 9843440422">+977-9843440422</a></li>
                            </ul>
                        </div>
                    </div> <!-- Details-Wrap .// -->

                    <div class="details-wrap d-flex align-items-center"> <!-- Details-Wrap .// -->
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><a href="mailto: info@somedomain.com">info@somedomain.com</a></li>
                                <li><a href="mailto: contact@somedomain.com">contact@somedomain.com</a></li>
                            </ul>
                        </div>
                    </div> <!-- Details-Wrap .// -->

                    <div class="details-wrap d-flex align-items-center"> <!-- Details-Wrap .// -->
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li>Bagbazar (Opp. To Hotel Hardik)</li>
                                <li>Kathmandu, Nepal</li>
                            </ul>
                        </div>
                    </div> <!-- Details-Wrap .// -->

                </div> <!-- Card .// -->
            </div> <!-- Col .// -->
            <div class="col-md-8"> <!-- Col .// -->
                <div class="map-wrapper">
                    <iframe src="<?php echo the_field('map')?>" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div> <!-- Col .// -->
        </div> <!-- Row .// -->

        <div class="contact-form-wrapper">
            <h1 class="section-title text-uppercase text-center">
                <span>Send us your </span>feedback
            </h1>

            <div class="row"> <!-- Row .// -->
                <div class="col-md-8 offset-md-2"> <!-- Col .// -->
                
                    <div class="white-card form-space"> <!-- Card .// -->
                        <?php echo do_shortcode('[caldera_form id="CF5ff4365e377ea"]'); ?>
                    </div> <!-- Card .// -->

                </div> <!-- Col .// -->
            </div> <!-- Row .// -->
        
            

        </div>

    </div> <!-- Container .// -->
</section>

<?php endwhile; wp_reset_postdata(); ?>



<?php get_footer(); ?>
