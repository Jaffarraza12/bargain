$(document).ready(function() {
    $('.related_categories_products').owlCarousel({
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
                items:  4,
                nav: false
            },
            1000: {
                items: 4,
                nav: true,
                loop: false,
                margin: 20
            }
        }
    })


});