<?php 
/* Template Name: Our Team */
?>
<?php get_header(); ?>
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


<section class="team-main common-padding bg-grey">
    <div class="container"> <!-- Container .// -->

        <div class="white-card"> <!-- Card .// -->
            <div class="row"> <!-- Row .// -->
                <div class="col-lg-3 col-sm-6 col-12"> <!-- Col .// -->
                    <div class="team-wrap" data-mh="team"> <!-- Team-Wrap .// -->
                        <div class="team-img">
                            <img src="img/team/puspa.jpg" alt="Team">
                            <div class="team-social-wrap">
                                <ul class="mini-comp-logo list-unstyled text-center">
                                    <li><a href="#" class="facebook-color"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="twitter-color"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="instagram-color"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#" class="linkedin-color"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h5>Puspa Dhungel</h5>
                            <p>Tourist Guide</p>
                        </div>
                    </div> <!-- Team-Wrap .// -->
                </div> <!-- Col .// -->

                <div class="col-lg-3 col-sm-6 col-12"> <!-- Col .// -->
                    <div class="team-wrap" data-mh="team"> <!-- Team-Wrap .// -->
                        <div class="team-img">
                            <img src="img/team/team4.jpg" alt="Team">
                            <div class="team-social-wrap">
                                <ul class="mini-comp-logo list-unstyled text-center">
                                    <li><a href="#" class="facebook-color"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="twitter-color"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="instagram-color"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#" class="linkedin-color"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h5>Jeevan Dahal</h5>
                            <p>Tourist Guide</p>
                        </div>
                    </div> <!-- Team-Wrap .// -->
                </div> <!-- Col .// -->

                <div class="col-lg-3 col-sm-6 col-12"> <!-- Col .// -->
                    <div class="team-wrap" data-mh="team"> <!-- Team-Wrap .// -->
                        <div class="team-img">
                            <img src="img/team/team2.jpg" alt="Team">
                            <div class="team-social-wrap">
                                <ul class="mini-comp-logo list-unstyled text-center">
                                    <li><a href="#" class="facebook-color"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="twitter-color"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="instagram-color"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#" class="linkedin-color"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h5>John Doe</h5>
                            <p>Sumo Driver</p>
                        </div>
                    </div> <!-- Team-Wrap .// -->
                </div> <!-- Col .// -->

                <div class="col-lg-3 col-sm-6 col-12"> <!-- Col .// -->
                    <div class="team-wrap" data-mh="team"> <!-- Team-Wrap .// -->
                        <div class="team-img">
                            <img src="img/team/amit.jpg" alt="Team">
                            <div class="team-social-wrap">
                                <ul class="mini-comp-logo list-unstyled text-center">
                                    <li><a href="#" class="facebook-color"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="twitter-color"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="instagram-color"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#" class="linkedin-color"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h5>Amit Dhungana</h5>
                            <p>Sr. Marketing</p>
                        </div>
                    </div> <!-- Team-Wrap .// -->
                </div> <!-- Col .// -->

                <div class="col-lg-3 col-sm-6 col-12"> <!-- Col .// -->
                    <div class="team-wrap" data-mh="team"> <!-- Team-Wrap .// -->
                        <div class="team-img">
                            <img src="img/team/shubham.jpg" alt="Team">
                            <div class="team-social-wrap">
                                <ul class="mini-comp-logo list-unstyled text-center">
                                    <li><a href="#" class="facebook-color"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="twitter-color"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="instagram-color"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#" class="linkedin-color"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content text-center">
                            <h5>Shubham Dhungel</h5>
                            <p>Sr. Marketing</p>
                        </div>
                    </div> <!-- Team-Wrap .// -->
                </div> <!-- Col .// -->
            </div> <!-- Row .// -->
        </div> <!-- Card .// -->

    </div> <!-- Container .// -->
</section>


<?php get_footer(); ?>
