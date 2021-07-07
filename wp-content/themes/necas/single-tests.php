<?php get_header() ; ?>

<?php while(have_posts()):the_post(); ?>

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

<!----------------------------
-------Classes-Main .//-------
----------------------------->

<section class="classes-main common-padding bg-grey">
    <div class="container"> <!-- Container .// -->

        <div class="row"> <!-- Row .// -->
        
            <div class="col-md-8"> <!-- Col .// -->

                <div class="white-card"> <!-- Card .// -->
                    <h1 class="section-title small-title text-uppercase text-left">
                        Overview
                    </h1>

                    <p><?php the_content(); ?></p>
                </div> <!-- Card .// -->

                <div class="white-card classes-tab"> <!-- Card .// -->

                    <ul class="nav" id="myTab" role="tablist">
                        <li class="nav-item"> <!-- Nav-Item .// -->
                            <a class="nav-link active" id="reading-tab" data-toggle="tab" href="#reading" role="tab" aria-controls="reading" aria-selected="true">Reading</a>
                        </li> <!-- Nav-Item .// -->
                        <li class="nav-item"> <!-- Nav-Item .// -->
                            <a class="nav-link" id="listening-tab" data-toggle="tab" href="#listening" role="tab" aria-controls="listening" aria-selected="false">Listening</a>
                        </li> <!-- Nav-Item .// -->
                        <li class="nav-item"> <!-- Nav-Item .// -->
                            <a class="nav-link" id="speaking-tab" data-toggle="tab" href="#speaking" role="tab" aria-controls="speaking" aria-selected="false">Speaking</a>
                        </li> <!-- Nav-Item .// -->
                        <li class="nav-item"> <!-- Nav-Item .// -->
                            <a class="nav-link" id="writing-tab" data-toggle="tab" href="#writing" role="tab" aria-controls="writing" aria-selected="false">Writing</a>
                        </li> <!-- Nav-Item .// -->
                    </ul>

                    <div class="tab-content" id="myTabContent"> <!-- Tab-Content .// -->

                        <div class="tab-pane fade show active" id="reading" role="tabpanel" aria-labelledby="reading-tab"> <!-- Tab .// -->

                           <?php the_field('reading'); ?>
                        
                        </div> <!-- Tab .// -->

                        <div class="tab-pane fade" id="listening" role="tabpanel" aria-labelledby="listening-tab"> <!-- Tab .// -->

                            <ul class="pl-5">
                            <?php the_field('listening'); ?>

                        
                        </div> <!-- Tab .// -->

                        <div class="tab-pane fade" id="speaking" role="tabpanel" aria-labelledby="speaking-tab"> <!-- Tab .// -->

                        <?php the_field('speaking'); ?>

                        
                        </div> <!-- Tab .// -->

                        <div class="tab-pane fade" id="writing" role="tabpanel" aria-labelledby="writing-tab"> <!-- Tab .// --> 

                        <?php the_field('writing'); ?>

                        
                        </div> <!-- Tab .// -->

                    </div> <!-- Tab-Content .// -->
                
                </div> <!-- Card .// -->

            </div> <!-- Col .// -->
            <div class="col-md-4"> <!-- Col .// -->

                <div class="white-card bg-primary color-white text-center mb-0 bottom-straight"> <!-- Card .// -->
                    <h3 class="text-uppercase">Register for Class</h3>
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

                        <textarea class="form-control" placeholder="Additional Information"></textarea>

                        <div class="text-center">
                            <button class="btn-main">Register Now</button>
                        </div>

                    </form>

                </div> <!-- Card .// -->
            
            </div> <!-- Col .// -->

        </div> <!-- Row .// -->
    </div> <!-- Container .// -->
</section>

<!----------------------------
-------Classes-Main .//-------
----------------------------->

<?php endwhile; wp_reset_postdata(); ?>
<?php get_footer() ; ?>
