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
                items:  5,
                nav: true
            },
            1000: {
                items: 5,
                nav: true,
                loop: false,
                margin: 20
            }
        }
    });


    $('.button-add-cart').on('click', function() {
        id = $(this).data('id')
        qty = $('.product_qty_'+id).val()
        $.ajax({
            url: 'index.php?route=checkout/cart/add',
            type: 'post',
            data: {'quantity':qty,'product_id':id},
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
                    url='index.php?route=product/cartview&product_id='+id;
                    option =$('#product input[type=\'radio\']:checked,#product input[type=\'checkbox\']:checked, #product select').serialize();
                    $.magnificPopup.open({
                        preloader: true,
                        tLoading: '',
                        type: 'iframe',
                        showCloseBtn:false,
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






});