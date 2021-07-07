<?php get_header(); ?>
<section class="landing-main">

<div class="hero-stickycontainer">
                
                <a href="faq.php">
                    <div class="newside-social"> <!-- Side .// -->
                        <div class="newside-title">Did You Know</div>
                        <div class="newside-icon"><i class="fab fa-quora"></i></div>
                    </div> <!-- Side .// -->
                </a>
                
                <a href="<?php echo site_url('/faq'); ?>">
                    <div class="newside-social"> <!-- Side .// -->
                        <div class="newside-title">Help</div>
                        <div class="newside-icon"><i class="far fa-question-circle"></i></div>
                    </div> <!-- Side .// -->
                </a>
                
                <a href="contact.php">
                    <div class="newside-social"> <!-- Side .// -->
                        <div class="newside-title">Contact</div>
                        <div class="newside-icon"><i class="fa fa-phone"></i></div>
                    </div> <!-- Side .// -->
                </a>
                
            </div>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleControls" data-slide-to="1"></li>
            <li data-target="#carouselExampleControls" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
        <?php
            $args=array(
                'post_type'=> 'sliders',
                'post_per_page' => -1,
                'orderby' => 'title',
                'order' => 'ASC'
            );
            $sliders=new WP_Query($args);
            while($sliders->have_posts()) : $sliders->the_post();
            $i++;
        ?>
            <div class="carousel-item <?php if($i==1) { echo 'active'; }?>">
                <img class="d-block w-100 lazyload" data-src="<?php echo the_post_thumbnail_url();?>" alt="First slide">
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
            
        </div>
        <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <i class="fas fa-chevron-left"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <i class="fas fa-chevron-right"></i>
            <span class="sr-only">Next</span>
        </a> -->
    </div>
</section>

<!----------------------------
-------Our-Affiliations .//-------
----------------------------->

<section class="our-affiliations common-padding">
    <div class="container"> <!-- Container .// -->
        <div class="row"> <!-- Row .// -->
            <div class="col-md-2"> <!-- Col .// -->
                <h1 class="section-title small-title span-block text-uppercase text-right">
                    <span>Our</span>
                    Affiliations
                </h1>
            </div> <!-- Col .// -->
            <div class="col-md-10"> <!-- Col .// -->
                <div class="owl-carousel owl-theme uni-slider">
                <?php
            $args=array(
                'post_type'=> 'affiliations',
                'post_per_page' => -1,
                'orderby' => 'title',
                'order' => 'ASC'
            );
            $affiliation=new WP_Query($args);
            while($affiliation->have_posts()) : $affiliation->the_post();
            
        ?>
                    <div class="item">
                        <a href="javascript:">
                            <img data-src="<?php echo the_post_thumbnail_url();?>" alt="LOGO" class="lazyload">
                        </a>
                    </div>
             <?php endwhile; wp_reset_postdata(); ?>
                  
                </div>
            </div> <!-- Col .// -->
        </div> <!-- Row .// -->
    </div> <!-- Container .// -->
</section>

<!----------------------------
-------Our-Affiliations .//-------
----------------------------->

<section class="index-preparation common-padding bg-grey">
    <div class="container"> <!-- Container .// -->

        <h1 class="section-title text-uppercase text-left">
            <span>Preparation</span>
            Classes
        </h1>

        <div class="row"> <!-- Row .// -->
            <div class="col-md-8"> <!-- Col .// -->
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

                <a href="<?php the_permalink(); ?>">
                    <div class="white-card">
                        <div class="row no-gutters">
                            <div class="col-md-3">
                                <div class="image d-flex h-100 align-items-center">
                                <?php 
                                $id_image= get_field('image');
                                $image=wp_get_attachment_image_src($id_image, 'overview');
                                ?>
                                    <img src="<?php echo $image[0]; ?>" alt="<?php the_title_attribute() ; ?>" class="lazyload">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="content">
                                    <p><?php echo the_excerpt(); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
             <?php endwhile; wp_reset_postdata(); ?>


              
                <div class="text-center">
                    <a href="javascript:" class="btn-main">View All</a>
                </div>

            </div> <!-- Col .// -->
            <div class="col-md-4"> <!-- Col .// -->
                <div class="white-card bg-primary color-white text-center mb-0 bottom-straight"> <!-- Card .// -->
                    <h3 class="text-uppercase">Interested in studying abroad ?</h3>
                </div> <!-- Card .// -->
                <div class="white-card form-space top-straight"> <!-- Card .// -->

                    <form action="javascript:">
                        
                        <div class="row"> <!-- Inner-Row .// -->
                            <div class="col-md-6 pr-md-2"> <!-- Inner-Col .// -->
                                <input type="text" class="form-control" placeholder="First Name" required>
                            </div> <!-- Inner-Col .// -->
                            <div class="col-md-6 pl-md-2"> <!-- Inner-Col .// -->
                                <input type="text" class="form-control" placeholder="Last Name" required>
                            </div> <!-- Inner-Col .// -->
                        </div> <!-- Inner-Row .// -->

                        <input type="email" class="form-control" placeholder="Email Address" required>

                        <input type="text" class="form-control" placeholder="Mobile Number" required>

                        <div class="form-group">
                            <label for="education-level">Education Level :</label>
                            <select class="form-control" id="education-level">
                                <option>Diploma</option>
                                <option>Bachelor</option>
                                <option>Master</option>
                                <option>PHD</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="course">Course :</label>
                            <select class="form-control" id="course">
                                <option>Arts</option>
                                <option>Business</option>
                                <option>Engineering</option>
                                <option>Health</option>
                                <option>IT</option>
                                <option>Science</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="preferred-destination">Preferred Destination :</label>
                            <select class="form-control" id="preferred-destination">
                                <option>Australia</option>
                                <option>USA</option>
                                <option>Italy</option>
                                <option>Bangladesh</option>
                                <option>India</option>
                                <option>Jupiter</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="intake">Intake :</label>
                            <select class="form-control" id="intake">
                                <option>Feb 2020</option>
                                <option>Mar 2020</option>
                                <option>Apr 2020</option>
                                <option>May 2020</option>
                                <option>Jun 2020</option>
                                <option>Jul 2020</option>
                            </select>
                        </div>

                        <div class="text-center">
                            <button class="btn-main">Enquire Now</button>
                        </div>

                    </form>

                </div> <!-- Card .// -->
            </div> <!-- Col .// -->
        </div> <!-- Row .// -->
    </div> <!-- Container .// -->
</section>

<section class="index-about common-padding bg-img bg-para" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('img/index-about-main.jpg');">
    <div class="container"> <!-- Container .// -->
        <div class="row"> <!-- Row .// -->
            <div class="col-md-6"> <!-- Col .// -->
                
                    <div class="discount-wrapper color-white">
                        <h6 class="text-uppercase"><span>Welcome to</span>NAAT Consultancy</h6>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias repudiandae accusamus veniam dolore rem incidunt voluptates impedit amet perferendis delectus consectetur, dignissimos odio quos odit debitis, aliquid sit dolor nulla corrupti. A autem dignissimos ipsa magni nemo corrupti, totam in maiores ea veritatis ut amet inventore. Voluptas temporibus voluptates vitae officiis a similique expedita molestiae optio asperiores recusandae veritatis nesciunt magnam laudantium eum nulla harum ex, consequuntur dolores, ratione rem mollitia rerum. Sapiente vel ducimus consequatur, repudiandae placeat iste, autem nam similique laboriosam, officiis alias corrupti minima aliquam eum tempore quasi! Labore voluptate repellendus iusto nulla ratione sequi, porro reiciendis.</p>
                        <!-- <a href="overview.php" class="btn-sub btn-b">Book a Visit</a> -->
                        <button type="button" class="btn-main" data-toggle="modal" data-target="#enquireModal">
                            Book a Visit
                        </button>
                    </div>
                
            </div> <!-- Col .// -->
            <div class="col-md-6"> <!-- Col .// -->
                <div class="discount-img-wrap">
                    <div class="img-wrapper img-wrapper-1">
                        <img data-src="img/index-about2.jpg" alt="Image" class="lazyload">
                    </div>

                    <div class="img-wrapper img-wrapper-2">
                        <img data-src="img/index-about1.png" alt="Image" class="lazyload">
                    </div>
                </div>
            </div> <!-- Col .// -->
        </div> <!-- Row .// -->
    </div> <!-- Container .// -->
</section>

<!-- Modal -->
<div class="modal fade" id="enquireModal" tabindex="-1" role="dialog" aria-labelledby="enquireModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header"> <!-- Modal-Head .// -->
                <h5 class="modal-title text-uppercase color-primary" id="exampleModalLongTitle"><strong>Register Now</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> <!-- Modal-Head .// -->

            <form action="javascript:">

                <div class="modal-body form-space"> <!-- Modal-Body .// -->

                    <input type="text" class="form-control" placeholder="Full Name" required>

                    <div class="row"> <!-- Inner-Row .// -->
                        <div class="col-md-6 pr-md-2"> <!-- Inner-Col .// -->
                            <input type="email" class="form-control" placeholder="Email Address" required>
                        </div> <!-- Inner-Col .// -->
                        <div class="col-md-6 pl-md-2"> <!-- Inner-Col .// -->
                            <input type="text" class="form-control" placeholder="Contact Number" required>
                        </div> <!-- Inner-Col .// -->
                    </div> <!-- Inner-Row .// -->

                    <div class="row"> <!-- Inner-Row .// -->
                        <div class="col-md-6 pr-md-2"> <!-- Inner-Col .// -->

                            <div class="form-group">
                                <label for="course">Course :</label>
                                <select class="form-control" id="course" required>
                                    <option>Arts</option>
                                    <option>Business</option>
                                    <option>Engineering</option>
                                    <option>Health</option>
                                    <option>IT</option>
                                    <option>Science</option>
                                </select>
                            </div>
                            
                        </div> <!-- Inner-Col .// -->
                        <div class="col-md-6 pl-md-2"> <!-- Inner-Col .// -->
                            
                            <div class="form-group">
                                <label for="intake">Intake :</label>
                                <select class="form-control" id="intake" required>
                                    <option>Feb, 2020</option>
                                    <option>Mar, 2020</option>
                                    <option>Apr, 2020</option>
                                    <option>May, 2020</option>
                                    <option>Jun, 2020</option>
                                    <option>Jul, 2020</option>
                                </select>
                            </div>
                            
                        </div> <!-- Inner-Col .// -->
                    </div> <!-- Inner-Row .// -->

                    <textarea class="form-control" placeholder="Additional Information"></textarea>
                
                </div> <!-- Modal-Body .// -->

                <div class="modal-footer"> <!-- Modal-Footer .// -->
                    <button type="button" class="btn-main">Save changes</button>
                </div> <!-- Modal-Footer .// -->

            </form>
        </div>
    </div>
</div>

<section class="abroad-main common-padding bg-grey">
    <div class="container"> <!-- Container .// -->

        <h1 class="section-title text-uppercase text-center">
            <span>Study</span> Abroad
        </h1>

        <div class="owl-carousel owl-theme"> <!-- Owl-Carousel .// -->
        
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
            <div class="item"> <!-- Item .// -->

                <div class="country-card white-card" data-mh="country"> <!-- Card .// -->
                    <div class="image">
                        <a href="study-abroad.php">
                            <img data-src="<?php the_post_thumbnail_url(); ?>" alt="Country_Image" class="lazyload">
                        </a>
                    </div>
                    <div class="content">
                        <div class="title">
                            <div class="row">
                                <div class="col-8">
                                    <h4><?php the_title(); ?></h4>
                                </div>
                                <div class="col-4">
                                    <div class="flag">
                                    <?php 
                    $id_image= get_field('image');
                    $image=wp_get_attachment_image_src($id_image, 'overview');
                    ?>
                                        <img data-src="<?php echo $image[0]; ?>" alt="flag" class="lazyload">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p><?php the_content(); ?></p>
                        <a href="<?php the_permalink(); ?>">Learn More &rarr;</a>
                    </div>
                </div> <!-- Card .// -->
            
            </div> <!-- Item .// -->
            <?php endwhile; wp_reset_postdata(); ?>
        

        </div> <!-- Row .// -->

        <div class="mt-5 text-center">
            <a href="abroad-listing.php" class="btn-main">View All</a>
        </div>
    </div> <!-- Container .// -->
</section>

<section class="testimonial common-padding bg-img" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('<?php echo get_template_directory_uri() . '/assets/img/testimonials.jpg'?>');">
    <div class="container"> <!-- Container .// -->
        <!-- <h3 class="main-title color-white">Customer's Testimonials</h3> -->
        <h3 class="section-title text-center color-white">Customer's Testimonials</h3>
        <div class="owl-carousel owl-theme"> <!-- Owl-Carousel .// -->
        <?php
            $args=array(
                'post_type'=> 'testimonials',
                'post_per_page' => -1,
                'orderby' => 'title',
                'order' => 'ASC'
            );
            $testimonial=new WP_Query($args);
            while($testimonial->have_posts()) : $testimonial->the_post();
            
        ?>

            <div class="item"> <!-- Item .// -->
          
            <div class="testimonial-wrapper">
                <div class="image">
                    <img data-src="<?php echo the_post_thumbnail_url(); ?>" alt="Client_Image" class="lazyload">
                </div>
                <div class="content">
                    <p class="testimonial-content"><?php echo the_content(); ?></p>
                    <p class="testimonial-author"><i class="fas fa-user-tie"></i> <?php echo the_field('name'); ?></p>
                    <p class="testimonial-designation"><?php echo the_field('designation'); ?></p>
                </div>
            </div>
            </div> <!-- Item .// -->
            <?php endwhile; wp_reset_postdata(); ?>

            

        </div> <!-- Owl-Carousel .// -->
    </div> <!-- Container .// -->
</section>
<?php get_footer(); ?>
