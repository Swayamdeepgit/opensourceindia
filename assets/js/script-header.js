// ===== Start Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});

$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
// ===== End Scroll to Top ==== 




// ===== Select Year Month Home Page Start ==== 
// $(document).ready(function() {
//     $('#post_month').on('change', function() {
//         $(this).closest("form").submit();
//     });
// });
// ===== Select Year Month Home Page End ==== 

// $( document ).ready(function() {
//     $(".userlinks li a").addClass("fa fa-angle-right");
// });



// ===== Video Section Start ====
$(document).ready(function(){
    $('.your-class').slick({
        dots: true,
        dotsClass: 'slick-dots',
        infinite: true,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 5000,
        prevArrow: '<button class="carousel-control-prev videos-prev-css" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>',
        nextArrow: '<button class="carousel-control-next videos-next-css" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></button>',
        speed: 1000,
        slidesToShow: 3,
        slidesToScroll: 1
    });
    $('.your-class-leader').slick({
        dots: true,
        dotsClass: 'slick-dots',
        infinite: true,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 5000,
        prevArrow: '<button class="carousel-control-prev videos-prev-css" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>',
        nextArrow: '<button class="carousel-control-next videos-next-css" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></button>',
        speed: 1000,
        slidesToShow: 5,
        slidesToScroll: 5
  });
});
// ===== Video Section End ====



jQuery("#post_month").change(function() {

    var data = {
        'action'   : 't4a_ajax_call', // the name of your PHP function!
        'function' : 'show_files',    // a random value we'd like to pass
        'fileid'   : '7'              // another random value we'd like to pass
        };

        // $('#post_month').on('change', function() {
        //     $(this).closest("form").submit();
        // });
        
    jQuery.post(ajaxurl, data, function(response) {
        jQuery("#receiving_div_id").html(response);
    });
});