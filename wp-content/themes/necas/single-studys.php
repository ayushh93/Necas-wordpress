<?php get_header(); ?>
<?php while(have_posts()): the_post(); ?>
<!----------------------------
-------Breadcrumb .//-------
----------------------------->
<?php 
                    $id_image= get_field('cover');
                    $image=wp_get_attachment_image_src($id_image, 'overview');
                    ?>
<section class="breadcrumb-main bg-img" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?php echo $image[0];?>');">
    <div class="container"> <!-- Container .// -->
        <h4 class="page-title"><?php echo the_title(); ?></h4>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-flex justify-content-start">
                <li class="breadcrumb-item"><a href="<?php home_url('/');?>"><i class="fas fa-home"></i></a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Listing</a></li> -->
                <li class="breadcrumb-item active" aria-current="page"><?php echo the_title(); ?></li>
            </ol>
        </nav>
    </div> <!-- Container .// -->
</section>

<!----------------------------
-------Breadcrumb .//-------
----------------------------->

<!----------------------------
-------Study-Abroad-Main .//-------
----------------------------->

<section class="study-abroad-main common-padding bg-grey">
    <div class="container"> <!-- Container .// -->
        <div class="row"> <!-- Row .// -->
            
            <div class="col-md-8"> <!-- Col .// -->
                <div class="white-card"> <!-- Card .// -->

                    <h1 class="section-title small-title text-uppercase text-left">
                        Overview
                    </h1>

                    <div class="text-group">
                        <p><?php the_excerpt(); ?></p>
                    </div>

                    <div class="text-group">
                        <h5 class="content-title">Why study in <?php echo the_title(); ?>?</h5>
                        <ul class="pl-5">
                            <?php the_content(); ?>
                        </ul>
                    </div>

                    <h1 class="section-title small-title text-uppercase text-left">
                        Gallery
                    </h1>
                
                    <div class="detail-slider-wrapper mb-4"> <!-- Detail-Slider-Wrapper .// -->

                        <div class="owl-carousel owl-theme"> <!-- Owl-Carousel .// -->

                            <div class="item"> <!-- Item .// -->
                                <div class="image">
                                    <img data-src="img/detail/slider/slider1.jpg" alt="Slider_Image" class="lazyload">
                                </div>
                                <div class="content">
                                    <h4 class="bold-text">Cape Town</h4>
                                </div>
                            </div> <!-- Item .// -->

                            <div class="item"> <!-- Item .// -->
                                <div class="image">
                                    <img data-src="img/detail/slider/slider2.jpg" alt="Slider_Image" class="lazyload">
                                </div>
                                <div class="content">
                                    <h4 class="bold-text">Kirstenbosch Botanical Gardens</h4>
                                </div>
                            </div> <!-- Item .// -->

                            <div class="item"> <!-- Item .// -->
                                <div class="image">
                                    <img data-src="img/detail/slider/slider3.jpg" alt="Slider_Image" class="lazyload">
                                </div>
                                <div class="content">
                                    <h4 class="bold-text">Johannesburg</h4>
                                </div>
                            </div> <!-- Item .// -->

                            <div class="item"> <!-- Item .// -->
                                <div class="image">
                                    <img data-src="img/detail/slider/slider4.jpg" alt="Slider_Image" class="lazyload">
                                </div>
                                <div class="content">
                                    <h4 class="bold-text">Kruger National Park</h4>
                                </div>
                            </div> <!-- Item .// -->

                        </div> <!-- Owl-Carousel .// -->

                    </div> <!-- Detail-Slider-Wrapper .// -->

                </div> <!-- Card .// -->

                <div class="white-card clearfix"> <!-- Card .// -->
                    <div class="float-left">
                        <h1 class="section-title small-title text-uppercase text-left mb-0">
                            Interested in Studying in Australia?
                        </h1>
                    </div>
                    <div class="float-right">
                        <!-- <a href="javascript:" class="btn-main">Enquire Now</a> -->
                        <button type="button" class="btn-main" data-toggle="modal" data-target="#enquireModal">
                            Enquire Now
                        </button>
                    </div>
                </div> <!-- Card .// -->
            </div> <!-- Col .// -->

            <div class="col-md-4"> <!-- Col .// -->

                <div class="white-card"> <!-- Card .// -->
                    <h1 class="section-title small-title text-uppercase text-left">
                        Courses
                    </h1>
                    <?php
    $featured_posts = get_field('courses');
    if( $featured_posts ): ?>
                    <ul class="pl-4">
                    <?php foreach( $featured_posts as $post ): 

// Setup this post for WP functions (variable must be named $post).
setup_postdata($post); ?>
                   
                        <li><p><?php echo the_title();?></p></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php 
    // Reset the global post object so that the rest of the page works correctly.
    wp_reset_postdata(); ?>
<?php endif; ?>
                </div> <!-- Card .// -->

                <div class="white-card"> <!-- Card .// -->
                    <h1 class="section-title small-title text-uppercase text-left">
                        Universities
                    </h1>
                    <?php
    $featured_posts = get_field('universities');
    if( $featured_posts ): ?>
                    <ul class="pl-4">
                    <?php foreach( $featured_posts as $post ): 

// Setup this post for WP functions (variable must be named $post).
setup_postdata($post); ?>
                   
                        <li>
                            <a href="javascript:"><p><?php echo the_title(); ?></p></a>
                        </li>
                        <?php endforeach; ?>
                        
                    </ul>
                    <?php 
    // Reset the global post object so that the rest of the page works correctly.
    wp_reset_postdata(); ?>
<?php endif; ?>
                </div> <!-- Card .// -->

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
<?php endwhile; ?>

<?php get_footer(); ?>
