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
<section class="services-main common-padding bg-grey">
    <div class="container"> <!-- Container .// -->

        <div class="row"> <!-- Row .// -->
        
            <div class="col-md-9"> <!-- Col .// -->

                <div class="white-card"> <!-- Card .// -->
                    <?php echo the_content(); ?>
                </div> <!-- Card .// -->

            </div> <!-- Col .// -->
            <div class="col-md-3"> <!-- Col .// -->

                <div class="white-card bg-primary color-white text-center mb-0 bottom-straight"> <!-- Card .// -->
                    <h3 class="text-uppercase">Quick Links</h3>
                </div> <!-- Card .// -->

                <div class="white-card top-straight quick-links-wrapper"> <!-- Card .// -->

                    <ul class="list-unstyled">
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
                        <li>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </li>
                        <?php endwhile; wp_reset_postdata(); ?>

                        
                    </ul>
                
                </div> <!-- Card .// -->
            
            </div> <!-- Col .// -->

        </div> <!-- Row .// -->
    </div> <!-- Container .// -->
</section>

<?php endwhile; wp_reset_postdata(); ?>
<?php get_footer() ; ?>
