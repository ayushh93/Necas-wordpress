<?php 
/* Template Name: Message from chairman */
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

<!----------------------------
-------Breadcrumb .//-------
----------------------------->

<!----------------------------
-------Message-Main .//-------
----------------------------->

<section class="overview-main common-padding bg-grey">
    <div class="container"> <!-- Container .// -->

        <div class="white-card"> <!-- Card .// -->
            <div class="row"> <!-- Row .// -->
                <div class="col-md-3"> <!-- Col .// -->
                    <div class="square-image-wrapper">
                    <?php 
                    $id_image= get_field('image');
                    $image=wp_get_attachment_image_src($id_image, 'overview');
                    ?>
                        <img data-src="<?php echo $image[0] ;?>" alt="Chairman" class="lazyload">
                    </div>
                </div> <!-- Col .// -->
                <div class="col-md-9"> <!-- Col .// -->
                    <div class="content">
                        <?php echo the_content(); ?>
                        <h5 class="content-title mb-2"><?php echo the_field('name');?></h5>
                        <h5 class="content-title"><?php echo the_field('designation');?></h5>
                    </div>
                </div> <!-- Col .// -->
            </div> <!-- Row .// -->
        </div> <!-- Card .// -->

    </div> <!-- Container .// -->
</section>
<?php get_footer(); ?>