<?php 
/* Template Name: FAQ page */
?>

<?php get_header();?>
<?php while(have_posts()): the_post(); ?>
<section class="breadcrumb-main bg-img" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?php echo the_post_thumbnail_url(); ?>');">
    <div class="container"> <!-- Container .// -->
        <h4 class="page-title">FAQ</h4>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-flex justify-content-start">
                <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Listing</a></li> -->
                <li class="breadcrumb-item active" aria-current="page">FAQs</li>
            </ol>
        </nav>
    </div> <!-- Container .// -->
</section>

<!----------------------------
-------Breadcrumb .//-------
----------------------------->

<!----------------------------
-------FAQ-Main .//-------
----------------------------->

<section class="faq-main common-padding bg-grey">
    <div class="container"> <!-- Container .// -->
        <div class="white-card">
        <?php
            $args=array(
                'post_type'=> 'faqs',
                'post_per_page' => -1,
                'orderby' => 'title',
                'order' => 'ASC'
            );
            $sliders=new WP_Query($args);
            while($sliders->have_posts()) : $sliders->the_post(); ?>

            <div class="text-group"> <!-- Text-Group .// -->
                <h5 class="content-title"><?php the_title(); ?></h5>
                <p><strong>A: </strong><?php the_content(); ?> </p>
            </div> <!-- Text-Group .// -->
<?php endwhile; wp_reset_postdata(); ?>

        </div>
    </div> <!-- Container .// -->
</section>

<!----------------------------
-------FAQ-Main .//-------
----------------------------->


<?php endwhile; ?>
<?php get_footer();?>
