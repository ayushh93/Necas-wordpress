<div class="white-card bg-primary color-white text-center mb-0 bottom-straight"> <!-- Card .// -->
    <h3 class="text-uppercase">Sidebar</h3>
</div> <!-- Card .// -->

<div class="white-card top-straight upcomming-wrapper"> <!-- Card .// -->
<?php 
    if(is_active_sidebar('blog_sidebar')):
    dynamic_sidebar('blog_sidebar');
endif;
?>
   
</div> <!-- Card .// -->