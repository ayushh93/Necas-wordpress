<?php get_header(); ?>

<!----------------------------
-------Breadcrumb .//-------
----------------------------->
<?php while(have_posts()):the_post(); ?>
<?php 
                    $id_image= get_field('cover_image');
                    $image=wp_get_attachment_image_src($id_image, 'overview');
                    ?>

<section class="breadcrumb-main bg-img" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?php echo $image[0] ; ?>');">
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
-------Breadcrumb .//-------
----------------------------->

<!----------------------------
-------Events-Main .//-------
----------------------------->

<section class="events-detail-main common-padding bg-grey">
    <div class="container"> <!-- Container .// -->
        <div class="row"> <!-- Row .// -->

            <div class="col-md-8"> <!-- Col .// -->
                <div class="white-card details-wrapper-main"> <!-- Card .// -->

                    <h1 class="section-title small-title text-left">
                        <?php echo the_title(); ?>
                    </h1>
                    <h6 class="date"><i class="far fa-calendar-alt"></i> <?php the_time('j M ,Y'); ?></h6>

                    <div class="blog-img-wrapper">
                        <img data-src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>" class="lazyload">
                    </div>

                    <div class="content-main init-letter-big">
                        <?php echo the_content();?>
                    </div>

                  

                </div> <!-- Card .// -->

            </div> <!-- Col .// -->
<?php endwhile; ?>


            <div class="col-md-4"> <!-- Col .// -->

                <?php get_sidebar(); ?>

            </div> <!-- Col .// -->

        </div> <!-- Row .// -->
    </div> <!-- Container .// -->
</section>

<!----------------------------
-------Events-Main .//-------
----------------------------->
<?php get_footer(); ?>
