<?php get_header(); ?>
<!----------------------------
-------Breadcrumb .//-------
----------------------------->

<?php 
    $blog_page=get_option('page_for_posts');
    $image = get_post_thumbnail_id($blog_page);
    $image= wp_get_attachment_image_src($image, 'banner');
?>
<section class="breadcrumb-main bg-img" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(<?php echo $image[0]?>);">
    <div class="container"> <!-- Container .// -->
        <h4 class="page-title">Events</h4>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-flex justify-content-start">
                <li class="breadcrumb-item"><a href="<?php echo home_url('/')?>"><i class="fas fa-home"></i></a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Listing</a></li> -->
                <li class="breadcrumb-item active" aria-current="page">Blog page</li>
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

<section class="events-main common-padding bg-grey">
    <div class="container"> <!-- Container .// -->
        <div class="row"> <!-- Row .// -->

            <div class="col-md-8"> <!-- Col .// -->
                <div class="white-card"> <!-- Card .// -->

                    <h1 class="section-title small-title text-uppercase text-left">
                        Recent Events
                    </h1>

                    <div class="event-wrapper">
                    <?php 
                        while(have_posts()): the_post();
                    ?>

                        <div class="event-wrap"> <!-- Event-Wrap .// -->
                            <div class="row"> <!-- Inner-Row .// -->
                                <div class="col-md-3 pr-md-3"> <!-- Inner-Col .// -->
                                    <div class="image">
                                        <a href="<?php the_permalink(); ?>">
                                            <img data-src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title();?>" class="lazyload">
                                        </a>
                                    </div>
                                </div> <!-- Inner-Col .// -->
                                <div class="col-md-9 pl-md-3"> <!-- Inner-Col .// -->
                                    <div class="content">
                                        <a href="<?php the_permalink(); ?>"><h5 class="content-title color-primary"><?php the_title(); ?></h5></a>
                                        <h6 class="date"><i class="far fa-calendar-alt"></i><?php the_time('j M ,Y'); ?></h6>
                                        <p><?php echo wp_trim_words(get_the_content(), 40); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="btn-naked">View Event &rarr;</a>
                                    </div>
                                </div> <!-- Inner-Col .// -->
                            </div> <!-- Inner-Row .// -->
                        </div> <!-- Event-Wrap .// -->
                        <?php endwhile; wp_reset_postdata();?>


                    </div>

                </div> <!-- Card .// -->

                <div class="main-pagination mt-5"> <!-- // Pagination--->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination d-flex justify-content-center">
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                            </li>
                        </ul>
                    </nav>
                </div> <!-- // Pagination--->

            </div> <!-- Col .// -->

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
