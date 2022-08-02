// $('.doc-menu button.btn').on('click', function () {
//     $('.doc-menu button.btn').removeClass('active');
//     $(this).addClass('active');
// })
(function ($) {
    'use strict';

var $window = $(window);


if ($.fn.owlCarousel) {
    $(".hero-slides").owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        smartSpeed: 800,
        margin: 0,
        dots: false,
        nav: true,
        autoplayHoverPause: true,
        autoplayTimeout: 3500,
        navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>']
    });
}

if ($.fn.owlCarousel) {
    $(".trial").owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        smartSpeed: 1000,
        margin: 0,
        dots: false,
        nav: true,
        autoplayHoverPause: true,
        autoplayTimeout: 3500,
        navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    });
}

if ($.fn.barfiller) {
    $('#bar1').barfiller({
        tooltip: true,
        duration: 1000,
        barColor: '#4a7aec',
        animateOnResize: true
    });
    $('#bar2').barfiller({
        tooltip: true,
        duration: 1000,
        barColor: '#4a7aec',
        animateOnResize: true
    });
    $('#bar3').barfiller({
        tooltip: true,
        duration: 1000,
        barColor: '#4a7aec',
        animateOnResize: true
    });
    $('#bar4').barfiller({
        tooltip: true,
        duration: 1000,
        barColor: '#4a7aec',
        animateOnResize: true
    });
}

$('#mosh-navbar').collapse({
    toggle: false
})

    

    $window.on('scroll', function () {
        if ($window.scrollTop() > 0) {
            $('.header-section').addClass('sticky');
            $('#logo').addClass('iconScroll');
            $('#icon').removeClass('icon');
            $('#login').removeClass('login');
        } else {
            $('.header-section').removeClass('sticky');
            $('#logo').removeClass('iconScroll');
            $('#logo').addClass('iconTop');
            $('#icon').addClass('icon');
            $('#login').addClass('login');
        }
    });
})(jQuery);

