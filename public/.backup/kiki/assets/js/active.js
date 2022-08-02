// $('.doc-menu button.btn').on('click', function () {
//     $('.doc-menu button.btn').removeClass('active');
//     $(this).addClass('active');
// })
// (function ($) {
//     'use strict';

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

    if ($.fn.imagesLoaded) {
        $('.doc-photos').imagesLoaded(function () {
            // filter items on button click
            $('.doc-menu').on('click', 'p', function () {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
            });
            // init Isotope
            var $grid = $('.doc-photos').isotope({
                itemSelector: '.single-photo',
                percentPosition: true,
                masonry: {
                    columnWidth: '.single-photo'
                }
            });
        });
    }

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
// })(jQuery);

