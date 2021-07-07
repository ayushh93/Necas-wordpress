$ = jQuery.noConflict();
$(document).ready(function(){

    // Preloader 

    $(window).on('load', function() {
        $('#preloader').delay(500).fadeOut(500);
    });

    // Dropdown Menu Slide
    
    $(".dropdown").hover(
        function() { $('.dropdown-menu', this).stop().slideDown('medium');
        },
        function() { $('.dropdown-menu', this).stop().slideUp('medium');
    });

    // Affiliations Slider

    $('.our-affiliations .owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: false,
        navText: [
            "<i class='fas fa-angle-left'></i>",
            "<i class='fas fa-angle-right'></i>"
        ],
        responsiveClass:true,
        responsive:{
            0:{
                items:2,
                nav:false
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:5,
                nav:false
            }
        }
    });

    // Abroad Slider

    $('.abroad-main .owl-carousel').owlCarousel({
        loop:true,
        nav:true,
        dots: false,
        autoplay: false,
        autoplayTimeout: 2000,
        autoplayHoverPause: false,
        navText: [
            "<i class='fas fa-angle-left'></i>",
            "<i class='fas fa-angle-right'></i>"
        ],
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:4,
                nav:true
            }
        }
    });

    // Detail-Gallery Slider

    $('.detail-slider-wrapper .owl-carousel').owlCarousel({
        nav: true,
        navText: [
            "<i class='fas fa-angle-left'></i>",
            "<i class='fas fa-angle-right'></i>"
        ],
        margin:20,
        dots: false,
        responsiveClass: true,
        autoplay: true,
        autoplaySpeed: 3000,
        navSpeed: 2000,
        loop: true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
            },
            1000:{
                items:3,
                nav: true
            }
        }
    });

    // Testimonial

    $('.testimonial .owl-carousel').owlCarousel({
        items: 1,
        margin: 30,
        loop: true,
        nav: false,
        dots: true,
        dotsEach: true,
        lazyLoad: false,
        autoplay: true,
        autoplaySpeed: 1500,
        navSpeed: 1500,
        autoplayTimeout: 4000,
        autoplayHoverPause: true, 
    });

    // Register Form Trigger

    function toggleReset(e){
        e.preventDefault();
        $('#reset').toggle();
    }

    function toggleLogin(e){
        e.preventDefault();
        $('#login').toggle(); 
    }

    $(()=>{

        $('#bttn-login1').click(toggleLogin);
        $('#bttn-login1').click(toggleReset);

        $('#bttn-login2').click(toggleReset);
        $('#bttn-login2').click(toggleLogin);

    });

    ///////////////
    // DASHBOARD///
    ///////////////

    // Dashboard Widget Accordion

    $('.wig-toggler').on('click',function(){
        var pannel=$(this).attr('data-pannel');
        $('#'+pannel).toggleClass('active');
        $('#'+pannel+' .wig-content').slideToggle('medium');
    });

    // Data-Table

    $('#data-table').DataTable();

});