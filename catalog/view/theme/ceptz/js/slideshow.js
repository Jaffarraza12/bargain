$(document).ready(function() {
    $.each($('.SlideShowGO'),function(ind,val){
        slideshow($('.SlideShowGO').attr('id'))
    })

    function slideshow(elem){
        $('#'+elem).swiper({
            mode: 'horizontal',
            slidesPerView: 1,
            pagination: '.'+elem,
            paginationClickable: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            spaceBetween: 30,
            autoplay: 2500,
            autoplayDisableOnInteraction: true,
            loop: true
        });
    }
});


