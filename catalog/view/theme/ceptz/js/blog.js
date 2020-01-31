$(document).ready(function () {
    $(document).ready(function() {
        var owl131 = $(".box #myCarousel131 .carousel-inner");

        $("#myCarousel131_next").click(function(){
            owl131.trigger('owl.next');
            return false;
        })
        $("#myCarousel131_prev").click(function(){
            owl131.trigger('owl.prev');
            return false;
        });

        owl131.owlCarousel({
            lazyLoad: true,
            loop: true,
            margin: 10,
            nav: true,
            items: 5

        });
    });
})
