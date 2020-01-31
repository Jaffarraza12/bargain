var product_id
$(function () {
    product_id = $('input[name="product_id"]').val()

})


$(document).ready(function(){
    $('#review').delegate('.pagination a', 'click', function(e) {
        e.preventDefault();

        $('#review').fadeOut('slow');

        $('#review').load(this.href);

        $('#review').fadeIn('slow');
    });

    $('#review').load('index.php?route=product/product/review&product_id='+ this.product_id );

    /*
     $('#quest').load('index.php?route=product/product/questionanswer&product_id='+ this.product_id );
     */

    $('#button-review').on('click', function() {
        $.ajax({
            url: 'index.php?route=product/product/write&product_id='+ this.product_id ,
            type: 'post',
            dataType: 'json',
            data: $("#form-review").serialize(),
            beforeSend: function() {
                $('#button-review').button('loading');
            },
            complete: function() {
                $('#button-review').button('reset');
            },
            success: function(json) {
                $('.alert-dismissible').remove();

                if (json['error']) {
                    $('#abda').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
                }

                if (json['success']) {
                    $('#abda').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');

                    $('input[name=\'name\']').val('');
                    $('textarea[name=\'text\']').val('');
                    $('input[name=\'rating\']:checked').prop('checked', false);
                }
            }
        });
    });

    $('#button-question').on('click', function() {
        $.ajax({
            url: 'index.php?route=product/product/ask&product_id='+ this.product_id ,
            type: 'post',
            dataType: 'json',
            data: $("#form-question").serialize(),
            beforeSend: function() {
                $('#button-quesiton').button('loading');
            },
            complete: function() {
                $('#button-quesiton').button('reset');
            },
            success: function(json) {
                $('.alert-success, .alert-danger').remove();

                if (json['error']) {
                    $('#abdq').after('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
                }

                if (json['success']) {
                    $('#abdq').after('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');

                    $('input[name=\'input-question-name\']').val('');
                    $('input[name=\'input-question-email\']').val('');
                    $('textarea[name=\'input-question\']').val('');

                }
            }
        });
    });

    $(document).ready(function() {
        /*$('.thumbnails').magnificPopup({
            type:'image',
            delegate: 'a',
            gallery: {
                enabled: true
            }
        });*/
        $("select").change(function(){
            image = $("option:selected", this).data('image')
            pop = $("option:selected", this).data('pop')
            if(image) {
                $(".product-image").find('img').attr('src',image)
                $(".product-image").find('img').attr('data-zoom-image',pop)
                $(".product-image").find('a').attr('href',pop)
                $(".zoomWindowContainer div").css('background-image','url('+pop+')' )
            }
        });
    });


    $('#button-cart').on('click', function() {
        $.ajax({
            url: 'index.php?route=checkout/cart/add',
            type: 'post',
            data: $('#product input[type=\'text\'], #product input[type=\'hidden\'],#product input[type=\'number\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),
            dataType: 'json',
            beforeSend: function() {
                $('#button-cart').button('loading');
            },
            complete: function() {
                $('#button-cart').button('reset');
            },
            success: function(json) {
                $('.alert-dismissible, .text-danger').remove();
                $('.form-group').removeClass('has-error');

                if (json['error']) {
                    if (json['error']['option']) {
                        for (i in json['error']['option']) {
                            var element = $('#input-option' + i.replace('_', '-'));

                            if (element.parent().hasClass('input-group')) {
                                element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                            } else {
                                element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                            }
                        }
                    }

                    if (json['error']['recurring']) {
                        $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');
                    }

                    // Highlight any found errors
                    $('.text-danger').parent().addClass('has-error');
                }

                if (json['success']) {
                    url='index.php?route=product/cartview&product_id='+$("#product input[type=\'hidden\']").val();
                    option =$('#product input[type=\'radio\']:checked,#product input[type=\'checkbox\']:checked, #product select').serialize();
                     $.magnificPopup.open({
                        preloader: true,
                        tLoading: '',
                        type: 'iframe',
                        mainClass: 'quickview',
                        removalDelay: 200,
                        items: {
                            src: url+'&'+option
                        }


                    });
                    $('#cart > button').html('<span id="cart-total"><i class="fa fa-shopping-cart"></i> ' + json['total'] + '</span>');
                    $('#cart > ul').load('index.php?route=common/cart/info ul li');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    });






    $('.option-tile').click(function(){
     /*   url='index.php?route=product/product/mobileoption&product_id='+$("#product input[type=\'hidden\']").val();
        option =$('#product input[type=\'radio\']:checked,#product input[type=\'checkbox\']:checked, #product select').serialize();
        $.magnificPopup.open({
            preloader: true,
            tLoading: '',
            type: 'iframe',
            mainClass: 'quickview',
            removalDelay: 200,
            items: {
                src: url+'&'+option
            }


        });*/

    });


    $('.opt-button').click(function () {
        option = $(this).data('option')
        elem = $(this).data('elem')
        $('.sibling_'+option).removeClass('opt-button-live')

        value = $(this).data('value')
        $('select[name="option['+option+']"]').val(value);
        $(this).addClass('opt-button-live')
        $('.'+elem).text($(this).text())
    })

    $('.date').datetimepicker({
        language: '{{ datepicker }}',

        pickTime: false
    });

    $('.datetime').datetimepicker({
        language: '{{ datepicker }}',
        pickDate: true,
        pickTime: true
    });

    $('.time').datetimepicker({
        language: '{{ datepicker }}',
        pickDate: false
    });

    $('button[id^=\'button-upload\']').on('click', function() {
        var node = this;

        $('#form-upload').remove();

        $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

        $('#form-upload input[name=\'file\']').trigger('click');

        if (typeof timer != 'undefined') {
            clearInterval(timer);
        }

        timer = setInterval(function() {
            if ($('#form-upload input[name=\'file\']').val() != '') {
                clearInterval(timer);

                $.ajax({
                    url: 'index.php?route=tool/upload',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData($('#form-upload')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $(node).button('loading');
                    },
                    complete: function() {
                        $(node).button('reset');
                    },
                    success: function(json) {
                        $('.text-danger').remove();

                        if (json['error']) {
                            $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
                        }

                        if (json['success']) {
                            alert(json['success']);

                            $(node).parent().find('input').val(json['code']);
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                    }
                });
            }
        }, 500);
    });
    $('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){
        $.ajax({
            url: 'index.php?route=product/product/getRecurringDescription',
            type: 'post',
            data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),
            dataType: 'json',
            beforeSend: function() {
                $('#recurring-description').html('');
            },
            success: function(json) {
                $('.alert-dismissible, .text-danger').remove();

                if (json['success']) {
                    $('#recurring-description').html(json['success']);
                }
            }
        });
    });
});



function StartZoom(){
    /*$('#image').elevateZoom({
     zoomType: "inner",
     cursor: "pointer",
     zoomWindowFadeIn: 500,
     zoomWindowFadeOut: 750
     });
     $('#image').elevateZoom({
     zoomWindowFadeIn: 500,
     zoomWindowFadeOut: 500,
     zoomWindowOffetx: 20,
     zoomWindowOffety: -1,
     cursor: "pointer",
     lensFadeIn: 500,
     lensFadeOut: 500,
     });*/
}
$(document).ready(function(){
    if($(window).width() > 992) {
        var z_index = 0;

        $(document).on('click','#zoomer',function(){
            StartZoom()
            $(this).attr('id','remove_zoomer').html('Remove Zoom')
        });
        $(document).on('click','#remove_zoomer',function(){
            $('.zoomContainer').remove();
            $(this).attr('id','zoomer').html('Click For Zoom')
        })

        $(document).on('click', '.open-popup-image', function () {
            $('.popup-gallery').magnificPopup('open', z_index);
            return false;
        });
        $(document).on('click', '.open-popup-image', function () {
            $('.popup-gallery').magnificPopup('open', z_index);
            return false;
        });



        $('.thumbnails a, .thumbnails-carousel a').click(function() {
            var smallImage = $(this).attr('data-image');
            var largeImage = $(this).attr('data-zoom-image');
            var ez =   $('#image').data('elevateZoom');
            $('#ex1').attr('href', largeImage);
            //ez.swaptheimage(smallImage, largeImage);
            z_index = $(this).index('.thumbnails a, .thumbnails-carousel a');
            return false;
        });
    } else {

    }

    $('.thumbnails2').magnificPopup({
        type:'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });
    $('.thumbnails').magnificPopup({
        type:'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });

    $(document).on('click', '.open-popup-image', function () {
        $('.popup-gallery').magnificPopup('open', 0);
        return false;
    });

    $('.popup-me-up').magnificPopup({
        type: 'image'
        // other options
    });

    $(document).on('click','.mbl-option',function(e){
        $('.mbl-option-popup').click();
    })

    $(document).on('click', '.closePopup', function (e)
    {
        e.preventDefault();
        $.magnificPopup.close();
    });


});


$(document).ready(function() {
    $('.category_products').owlCarousel({
        loop: true,
        margin: 10,
        lazyLoad: true,
        responsiveClass: true,
        responsive: {
            0: {
                items:2,
                nav: true
            },
            600: {
                items: 3,
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


    $('.hot_buy_product').owlCarousel({
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
                items: 2,
                nav: true,
                loop: false,
                margin: 20
            }
        }
    })
})
$(function () {
    $('.effect').magnificPopup({
        type: 'image',

        removalDelay: 200,
        callbacks: {
            beforeOpen: function () {

                this.st.image.markup = this.st.image.markup.replace('mfp-figure',
                    'mfp-figure mfp-with-anim');
                this.st.mainClass = this.st.el.attr('data-effect');
            }
        },
        closeOnContentClick: true,
        midClick: true
    });

    $('.open-popup-link').magnificPopup({

        type:'inline',
        showCloseBtn:false,
          midClick: true, // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
        removalDelay: 100,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = 'mfp-move-from-top';
                this.slideUp
            }
        },
    });
});
