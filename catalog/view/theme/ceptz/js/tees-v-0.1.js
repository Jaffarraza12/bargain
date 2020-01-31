
$(document).ready(function() {
    $('.carve-latest-grid').owlCarousel({
        loop: true,
        margin: 10,
        lazyLoad: true,
        responsiveClass: true,
        responsive: {
            0: {
                items:1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 5,
                nav: true,
                loop: false,
                margin: 20
            }
        }
    })



});